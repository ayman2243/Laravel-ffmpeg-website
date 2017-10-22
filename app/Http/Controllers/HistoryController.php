<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HistoryController extends Controller
{
    //
    public function index()
    {
    	if(Auth::guest())
    	{
    		return view('history.guest');
    	}
    	else
    	{
    		return view('history.user');
    	}
    	
    }
}
