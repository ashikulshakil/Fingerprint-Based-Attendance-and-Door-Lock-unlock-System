<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;

class showrecordController extends Controller
{
	public function showrecordcollect()
	{

		
		    $data=DB::table('employee_list')
           ->get();

       return View::make('shoEmployee')->with('employee_data',$data);
	}

}