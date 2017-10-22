<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Tsvideo;

class PublicController extends Controller
{
    //

    public function index(Request $request)
    {
        $videos = Tsvideo::paginate(20);

        if ($request->ajax() && count($videos) > 0) 
        {
            $view = view('videoViewCard',compact('videos'))->render();
        
            return response()->json(['html'=>$view]);
        }

        return view('welcome',compact('videos'));
    }


    public function get_avatar($uid,$md)
    {
    	$user = DB::table('users')->where('id',$uid)->first();

    	$avatar = DB::table('users_avatar')->where('uid',$uid)->first();

    	if($avatar && md5($user->created_at) == $md)
    	{
    		$file= public_path(). "/uploads/us_avatars/".$avatar->avatar_loc;
    	
        	$name = md5($avatar->created_at).'.jpg';
    	}
    	else
    	{
    		$file= public_path(). "/uploads/us_avatars/df.jpg";
    	
        	$name = 'default.jpg';
    	}
    	
	    $headers = array(
			              'Content-Type: application/jpg',
			            );

	    return response()->download($file, $name, $headers);
    }

    public function get_propic($uid,$md)
    {
        $user = DB::table('users')->where('id',$uid)->first();

        $pic = DB::table('users_pro_pic')->where('uid',$uid)->first();

        if($pic && md5($user->created_at) == $md)
        {
            $file= public_path(). "/uploads/us_pro_pic/".$pic->pic_loc;
            
            $name = md5($pic->created_at).'.jpg';
        }
        else
        {
            $file= public_path(). "/uploads/us_pro_pic/df.jpg";
            
            $name = 'default.jpg';
        }
        
        $headers = array(
                          'Content-Type: application/jpg',
                        );

        return response()->download($file, $name, $headers);
    }
}
