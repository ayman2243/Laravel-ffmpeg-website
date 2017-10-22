<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use DB;
use App\User;
use Auth;
use Socialite;
use Session;
use Redirect;
use Image;


class AuthController extends Controller
{
 
    // Redirect to true page ************************
    
    protected $redirectTo = '/';



    public function redirectToProvider($provider)
    {
        if(Auth::guest())
        {
            return Socialite::driver($provider)->redirect();
        }
        else
        {
            return redirect('/');
        }
    }

    public function handleProviderCallback($provider)
    {
        
            $user = Socialite::driver($provider)->user();

            $authUser = $this->findOrCreateUser($user, $provider);

            if (!$authUser) 
            {
                return redirect('/login')->with('error_auth_message','User Already Exists in Our Database!');
            }
            else
            {
                Auth::login($authUser, true);
                
                return redirect($this->redirectTo);
            }

    }


    public function findOrCreateUser($user, $provider)
    {

        
        $found = User::where([
                                ['email', $user->email],
                                ['password','<>', null]
                             ])->first();

        if ($found) 
        {
           return false;
        }
        else 
        {
            $authUser = User::where([
                                    ['provider_id', $user->id],
                                    ['provider' , $provider]
                                    ])->first();
            if ($authUser) 
            {
                return $authUser;
            }
            else
            {

                $found2 = User::where([
                                ['email', $user->email]
                             ])->first();

                if($found2)
                {
                    return false;
                }
                else
                {
                    function ren($ui)
                    {
                        $ext = explode('.', $ui);
                        return md5($ui.date('Y-m-d h:s:i'));
                    }

                    $user2 = User::create([
                        'fname'     => $user->name,
                        'email'    => $user->email,
                        'provider' => $provider,
                        'provider_id' => $user->id
                    ]);

                    $insertedId = $user2->id;

                    $n1 = ren($user->avatar);
                    $n2 = ren($user->avatar_original);

                    $avatar = Image::make($user->avatar)->resize(100, null)->save('public/uploads/us_avatars/'.$n1.'.jpg');
                    $avatar = Image::make('public/uploads/us_avatars/'.$n1.'.jpg')->resize(null, 100)->save('public/uploads/us_avatars/'.$n1.'.jpg');

                    $avatar_original = Image::make($user->avatar_original)->resize(512, null)->save('public/uploads/us_pro_pic/'.$n2.'.jpg');
                    $avatar_original = Image::make('public/uploads/us_pro_pic/'.$n2.'.jpg')->resize(null, 512)->save('public/uploads/us_pro_pic/'.$n2.'.jpg');

                    DB::table('users_avatar')->insert(
                                                    ['uid' => $insertedId, 'avatar_loc' => $n1.'.jpg', 
                                                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                                                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                                                    ]
                                               );
                    DB::table('users_pro_pic')->insert(
                                                    ['uid' => $insertedId, 'pic_loc' => $n2.'.jpg', 
                                                    'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                                                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                                                    ]
                                               );

                    return $user2;
                }
            }
        }
        
    }

}