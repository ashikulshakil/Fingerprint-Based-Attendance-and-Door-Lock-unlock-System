@extends('layouts.default')
@section('title','Finger Print System')

@section('content')

<html>
<body>
  <head>
    <meta http-equiv="refresh" content="5" /> 
  </head>
	
	


  
    
    @if(count($request_list)>0) 
  <h1>REQUEST</h1>
   @foreach($request_list as $request_list)
  
   <h3> New Request for Enrolling On {{$request_list->date}} at {{$request_list->time}}<h3>
   
     <a href="{{URL::to('/addEmployee')}}" class="button"align="center">Accept</a>
    
   <a href="{!! route('test', ['prisw'=>$request_list->sensorId]) !!}"class="button1"> Reject</a>

  
   @endforeach
   @else
  <h5>There is No Request For Enrolling</h5> 
  @endif




</table>

<style>

.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
 

}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}





.button1 {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: red;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button1:hover {background-color: #B22222}

.button1:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
 a {
    color:black;
    text-decoration: none;
}
.in
{
  position:absolute;
  font-size:30px;
}
h1
{
	text-align: center;
  color:green;
  font-size:45px;
  font-family: Arial, Helvetica, sans-serif;
}
h4
{
	text-align: center;
}
h3
{
  text-align: center;
  top:45%;
  font-size:35px;
  color:    #008080;
  font-family: Arial, Helvetica, sans-serif;
}
h5
{
  text-align: center;
  color:red;
  font-size:45px;
  padding:15%;
}
table
{
    table-layout: fixed;
    width: 500px;
    height: 200px;
}
a{

}
</style>
</body>
</html>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>  
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>  
<br>
<br>
<br>
<br>
<br>  
</body>
</html>
@stop
