<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PlayerController extends Controller
{
    //
    public function index($id)
    {
    	$video = DB::table('tsvideos')->where('id',$id)->first();
    	return view('player',['video'=>$video]);
    }
}
