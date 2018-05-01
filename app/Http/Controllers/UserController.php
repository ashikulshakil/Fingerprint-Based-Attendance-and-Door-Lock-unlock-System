<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;
use Hash;
use App\Http\Requests\RegiRequest;
use App\Http\Requests\EmployeeRequest;
use View;
 
class UserController extends Controller
{
    

    public function addId() {
    	return view('pages.addId');
    }

    public function addId2() {
        return view('pages.addId2');
    }

    public function addEmployee() {
        return view('pages.addEmployee');
    }


 public function switchInfo($prisw){

        $id="234";
        $ipp=DB::table('ipaddress')
           ->get();
           foreach ($ipp as $ipp)
       $ip="$ipp->ip";
   $stri="http://".$ip."/";

 //$f = file_get_contents('http://localhost/sh.php?id='.$id.'');
     @$content = file_get_contents($stri.$id.'');





if( !empty($content) )
{
         
          DB::table('request')->where('sensorId', '=',$prisw)->delete();
         return redirect()->to('requestdata');
        //return $prisw;
       //do stuffs here with $prisw and $secsw
         }
    }



    public function switchInfo1($prisw1){
            
          DB::table('employee_list')->where('sensorId', '=',$prisw1)->delete();
         return redirect()->to('showdata');
        //return $prisw;
       //do stuffs here with $prisw and $secsw
    }



    public function switchInfo2($prisw2){
      
        
         $data = DB::table('employee_record')->where('reg', $prisw2)->get();
        // echo $data;
        return View::make('showemployeeDetails')->with('employee_data',$data);
         
    }




    public function switchInfo3($prisw3,$prisw4){
      
        
         $data = DB::table('employee_record')
         ->where('reg', $prisw3)
         ->where('date',$prisw4)
         ->get();
        // echo $data;
        return View::make('showemployeeDetails2')->with('employee_data',$data);
         
    }



public function changePassword(RegiRequest $request) {
        $data = $request->all();
     
        
         $newpassword = Hash::make($data['newpassword']);
        $password = ($data['password']);
        

         if (Auth::attempt(['password' => $password]))  {

          DB::table('users')
            ->where('id', '1')
            ->update(['password' =>$newpassword]);
           
            return redirect()->to('home');
          
        } 

        else 
        {
             echo "<script type='text/javascript'>alert('Password is incorrect!')</script>";
        }
    }




public function login(Request $request) {
        $data = $request->all();
     
        
         
        $password = ($data['password']);
        

         if (Auth::attempt(['password' => $password]))  {

          
           
            return redirect()->to('home');
          
        } 

        else 
        {
             echo "<script type='text/javascript'>alert('Password is incorrect!')</script>";
        }
    }













    public function postLogin(Request $request) {
       // return $request->sensorId;
       //$A= $request->user;
       //$data = $request->user;
    /*if(!empty($_GET["sensorId"])){

  $A= $_GET["sensorId"];  
}*/
 //echo "hello";
  
date_default_timezone_set("asia/dhaka");
 $date=date("d-m-Y");
 $time=date("h:i:s A ");

 
         DB::table('request')->insert(

      [ 'sensorId' =>$request->sensorId,'date' =>  $date,'time' =>  $time]
      
);


     /*   $data = $request->all();
        // return $data;
         if (Auth::attempt(['username' => $data['username'], 'password' => $data['password']])) {
            // Authentication passed...
            return redirect()->to('home');
        } else 
        {
            return 'not login';
        }*/

    }
   

         
         
       //$A= $request->user;
       //$data = $request->user;
    /*if(!empty($_GET["sensorId"])){

  $A= $_GET["sensorId"];  
}*/
 //echo "hello";
  
function showRecord(Request $request) {
 
 
        $reg=$request->regname;
        
         $data = DB::table('employee_record')->where('reg', $reg)->get();

        return View::make('showemployeeDetails')->with('employee_data',$data);
         
         }
       



function showRecordDate(Request $request) {
        
 
        $date=$request->date;
        $year=substr($date, 0, 4);
         $month=substr($date,5 , 2);
          $day=substr($date, 8, 2);
          $date=$day."-".$month."-".$year;
         
         //$data1 = DB::table('employee_record')->where('date', $date)->get();

         $data = DB::table('employee_record')
            ->select('date','reg','name')
            ->distinct()
            ->where('date', $date)
            
            //->orderBy('name')
            ->get();
         
          return View::make('showemployeeDetails1')->with('employee_data',$data);

        
         

         
 



     
         }




                                              



    public function postAdd(EmployeeRequest $request) {
      
        $id=$request->sensorId;
       
   
 DB::table('employee_list')->insert(

      [ 'sensorId' =>  $request->sensorId,'reg' => $request->reg,'name' => $request->username]
     

);

 $n=strlen($id);
if($n=='1')
  $id="00".$id;
else if($n=='2')
  $id="0".$id;

$ipp=DB::table('ipaddress')
           ->get();
           foreach ($ipp as $ipp)
       $ip="$ipp->ip";
   $stri="http://".$ip."/";
 //$f = file_get_contents('http://localhost/sh.php?id='.$id.'');
     @$content = file_get_contents($stri.$id.'');

if( !empty($content) )
{
   return "SUCCESSFUL";
}
else
{
  return "ERROR";
}

  


    //if (false !==($contents = @file_get_contents('http://192.168.0.106/'.$id.''))) {
     //  echo "ok";
//} else {
    //echo "error happened";
//}
     
 //$f = file_get_contents('http://192.168.0.106/'.$id.'');

 //$f = file_get_contents('http://localhost/check.php?id='.$id.'');
  

//return redirect()->to('home');

    }
public function logout() {
        Auth::logout();
        return redirect()->to('home');
    }


}