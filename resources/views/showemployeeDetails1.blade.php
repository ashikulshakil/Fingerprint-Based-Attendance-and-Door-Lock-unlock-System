@extends('layouts.default')
@section('title','Finger Print System')

@section('content')

<html>
<body>
  <head>
   
  </head>


 @if(count($employee_data)>0)
   <h1>Student List </h1>
   <h2>Date:{{$employee_data[0]->date}}</h2>
 <!-- <h2>Date:{{$employee_data[0]->date}}</h2>  -->


  
<table border="1"align="center"bordercolor=" green">

  <tr>
    
    <th width="100"bgcolor=" #7FFFD4">Reg No.</th> 
    <th width="100"bgcolor=" #7FFFD4">Name</th>
    <th width="100"bgcolor=" #7FFFD4">Details</th>
  </tr>
  @endif


  @if(count($employee_data)>0)
   @foreach($employee_data as $employee_data1)
  <tr>
    <td align="center"bgcolor="#5F9EA0">{{$employee_data1->reg}}</td> 
    <td align="center"bgcolor="#A9A9A9">{{$employee_data1->name}}</td>
     <td align="center"bgcolor="#B0C4DE"><a href="{!! route('test3', ['prisw3'=>$employee_data1->reg,'prisw4'=>$employee_data1->date]) !!}"class="button">Details</a></td> 
   </tr>
   @endforeach


   @else
  <h3>On This Date Nobody Entered Into The Room</h3> 
  @endif 
</table>

<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  
}
 a {
    color:black;
    text-decoration: none;
}
h1
{
  text-align: center;
  font-size: 45px;
  color:#008080;
  font-family: Arial, Helvetica, sans-serif;
}
h4
{
  text-align: center;
}
h2
{
  text-align: center;
  color:  #4682B4;
  font-family: Arial, Helvetica, sans-serif;
}
h3
{
  text-align: center;
  padding:12%;
  color:red;
  font-size:70px;
}
table
{
    table-layout: fixed;
    width: 500px;
    height: 200px;
     font-family: Arial, Helvetica, sans-serif;
}

  form {
    top:150px;
   left:50%;
}

.login-block input {
    width: 30%;
    height: 55px;
    box-sizing: border-box;
    border-radius: 15px;
    border: 1px solid green;
    margin-bottom: 20px;
    font-size: 20px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
    margin:35px;
}
.login-block button {
    width: 5%;
    height: 30px;
    background: black;
    box-sizing: border-box;
    border-radius: 15px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 20px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
    margin:-15px;
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
