@extends('layouts.default')
@section('title','Finger Print System')

@section('content')

<html>
<body>
  <head>
   
  </head>
   
   @if(count($employee_data)>0)
	<h1>Student Details</h1>
  <h2>Name:{{$employee_data[0]->name}}</h2>
   <h2>Reg No:{{$employee_data[0]->reg}}</h2>
	
 
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>    

<table border="1"align="center"bordercolor="white">

  <tr>
    <th height="20" bgcolor=" #7FFFD4">Date</th>
    <th height="20" bgcolor=" #7FFFD4">Entrance</th> 
    <th height="20" bgcolor=" #7FFFD4">Exit</th>
   
</tr>
@endif
  @if(count($employee_data)>0)
   @foreach($employee_data as $employee_data)
  <tr>
    <td align="center"bgcolor="#5F9EA0" >{{$employee_data->date}}</td>
    <td align="center"bgcolor="#A9A9A9">{{$employee_data->entrance}}</td>
    <td align="center"bgcolor="#BDB76B">{{$employee_data->outrance}}</td>
  </tr>
  @endforeach
  @else
  <h3>This Person Didn't Enter Into The Room</h3>
  @endif 
  
 
   
</table>

<style>


 a {
    color:black;
    text-decoration: none;
}
h3
{
	text-align: center;
  padding:12%;
  color:red;
  font-size:70px;
font-family: Arial, Helvetica, sans-serif;
}
h1
{
  text-align: center;
  font-size: 45px;
  color:#008080;
  font-family: Arial, Helvetica, sans-serif;
}
h2
{
	text-align: center;
  color:#228B22;
  font-family: Arial, Helvetica, sans-serif;
}
table
{
    table-layout: fixed;
    width: 500px;
    height: 200px;
     font-family: Arial, Helvetica, sans-serif;
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
