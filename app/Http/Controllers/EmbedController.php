<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class EmbedController extends Controller
{
    public function index($id)
    {
    	$video = DB::table('tsvideos')->where('id',$id)->first();
    	return view('embed',['video'=>$video]);
    }
}
