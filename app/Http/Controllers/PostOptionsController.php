<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\Converter;
use App\TrackConvJobs2;
use App\Tsvideo;
use Validator;
use Auth;
use FFMPEG;
use DB;


class PostOptionsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {


        $formats = '';

        foreach (FFMPEG::convert()->getSupportedFormats() as $key => $value) 
        {
            $formats = $formats.$key.',';
        }
        
        $fails = array();
        
        $succ = array();

        $videos = $request->file('videos');




        foreach ($videos as $video) 
        {

            $timeFormat = FFMPEG::getMediaInfo($video)['streams'][0]['duration'];
            
            $timeFormat = substr($timeFormat, 0, strpos($timeFormat, "."));
            
            $timeFormat = explode(':', $timeFormat);
            
            foreach ($timeFormat as $key => $value) 
            {
               if($timeFormat[$key] == 0)
               {
                    unset($timeFormat[$key]);
               }
            }

            if(count($timeFormat) == 1)
            {
                foreach ($timeFormat as $key => $value) 
                {
                    $timeFormat[$key] = '00:'.$timeFormat[$key];
                }
            }
            
            $timeFormat = implode(':',$timeFormat);
            
            $validator = Validator::make(array('file'=> $video), 
            [
                'file' => 'required|max:4000000000|mimes:qt,'.substr(trim($formats), 0, -1) 
            ]);

            $ext = explode('.', $video->getClientOriginalName());

            $ext = end($ext);
            
            if($ext != null)
            {
                $ext = '.'.$ext;
            }

            if ( $validator->fails() || !FFMPEG::getMediaInfo($video) ) 
            {
                $fails[] = $video->getClientOriginalName();
            }
            else
            {

                // to show user what is good and done
                $succr[] =  $video->getClientOriginalName();

                // rename file to uniqe name 
                $new_name = md5($video->getClientOriginalName().Auth::user()->fname.date('Y-m-d h:s:i').microtime().rand(0,100000000000));

                while(file_exists('storage/app/default/'.Auth::user()->id.'/videos/'.$new_name)) 
                {
                  $new_name = md5($video->getClientOriginalName().Auth::user()->fname.date('Y-m-d h:s:i').microtime().rand(0,100000000000));
                } 

                // save as default version 
                $vpath = $video->storeAs('default/'.Auth::user()->id.'/videos/'.$new_name.'/org',$new_name.$ext);

                $succ[] = [$vpath => $new_name];

                $succVr[] = $new_name;


                

                // link userId
                TrackConvJobs2::create
                ([
                    'uid' => Auth::user()->id, 
                    'vpath' => $vpath,
                    'uniqe_name' => $new_name,
                    'old_name' => $video->getClientOriginalName()
                ]);

                $oldvTitle = explode('.', $video->getClientOriginalName());

                array_pop($oldvTitle);
                
                $oldvTitle = implode('', $oldvTitle);
                
                Tsvideo::create
                ([
                    'vid' => $new_name,
                    'user_id' => Auth::user()->id,
                    'title' => $oldvTitle,
                    'uniqe_name' => $vpath,
                    'time' => $timeFormat,
                    'thumnail' => 'default/'.Auth::user()->id.'/videos/'.$new_name.'/thumb/foo-thumb-01.png'
                ]);



         
                
            }
           
        }

        if(count($succ) > 0)
        {
            // make job to converter 
            dispatch(new Converter($succ,Auth::user()->id));
        }
        else
        {

        } 

        
        $respond = [
                        "fails" => $fails,
                        "success" => [
                                         "names" => (isset($succr) ? $succr : null),
                                         "progressCodes" => ( isset($succVr) ? $succVr : null)
                                     ]
                    ];

        
        header('Content-Type: application/json');
        
        echo json_encode($respond,null);
                   

    }

    public function getJobProgress($id)
    {
        header('Content-Type: application/json');

        echo json_encode( FFMPEG::getProgress($id) );
    }
}
