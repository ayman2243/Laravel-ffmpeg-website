<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use FFMPEG;
use DB;
use Storage;

class Converter implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public function __construct(array $paths, $userid)
    {
        //

        $reso = [
                    '144' =>  ['256','144', '20'],
                    '240' =>  ['426','240', '22'],
                    '360' =>  ['640','360', '24'],
                    '480' =>  ['854','480', '26'],
                    '720' =>  ['1280','720', '28'],
                    '1080' => ['1920','1080', '30'],
                    '1440' => ['2560','1440', '32'],
                    '2160' => ['3840','2160', '34']
                ];

        foreach ($paths as $v) 
        {
            foreach ($v as $path => $progress_name) 
            {

                $info = FFMPEG::getMediaInfo('storage/app/'.$path);
                $height = $info['streams'][0]['height'];
                $width = $info['streams'][0]['width'];
                $rate =  $info['streams'][0]['display_aspect_ratio'];
                $frames = $info['streams'][0]['nb_frames'];
                $time = $info['streams'][0]['duration'];
                // ------
                $str_time = preg_replace("/^([\d]{1,2})\:([\d]{2})$/", "00:$1:$2", $time);
                sscanf($str_time, "%d:%d:%d", $hours, $minutes, $seconds);
                $time_seconds = $hours * 3600 + $minutes * 60 + $seconds;
                // ------
                
                Storage::MakeDirectory('default/'.$userid.'/videos/'.$progress_name.'/mp4_'.$height, 0777);
                 
                Storage::MakeDirectory('default/'.$userid.'/videos/'.$progress_name.'/thumb', 0777);
           
                FFMPEG::getThumbnails('storage/app/'.$path, 'storage/app/default/'.$userid.'/videos/'.$progress_name.'/thumb/foo-thumb', 5,'png', '-vf fps=4/'.round($time_seconds).'');               

                foreach ($reso as $key => $e) 
                {

                    if($height > $key)
                    {
                        Storage::MakeDirectory('default/'.$userid.'/videos/'.$progress_name.'/mp4_'.$key, 0777);

                        FFMPEG::convert()->input('storage/app/'.$path)->output('storage/app/default/'.$userid.'/videos/'.$progress_name.'/mp4_'.$key.'/'.$progress_name.'.mp4')->go('-vf scale=trunc(oh*a/2)*2:'.$e[1].' -codec:v libx264 -crf '.$e[2].' -pix_fmt yuv420p');
                    }
                }

                FFMPEG::convert()->input('storage/app/'.$path)->output('storage/app/default/'.$userid.'/videos/'.$progress_name.'/mp4_'.$height.'/'.$progress_name.'.mp4')->progress($progress_name)->go('-vf scale=trunc(oh*a/2)*2:'.$height.' -codec:v libx264 -pix_fmt yuv420p');

            }
            
              
        }


    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
       
    }
}
