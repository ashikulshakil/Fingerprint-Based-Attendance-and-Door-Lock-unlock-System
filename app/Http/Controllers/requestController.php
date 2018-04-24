<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;

class requestController extends Controller
{
	public function requestcollect()
	{

		
		    $data=DB::table('request')
           ->get();

       return View::make('showRequest')->with('request_list',$data);
	}

}