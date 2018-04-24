@extends('layouts.default')
@section('title','Finger Print System')

@section('content')

<html>
<body>
  <head>
   
  </head>
   
   
	<h1>Student Details</h1>
  <h2>Name:{{$employee_data[0]->name}}</h2>
  <h2>Reg:{{$employee_data[0]->reg}}</h2>
   <h4>Date:{{$employee_data[0]->date}}</h4>
	
 
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>    

<table border="1"align="center"bordercolor="white">

  <tr>
    <th height="20" bgcolor=" #7FFFD4">Entrance</th> 
    <th height="20" bgcolor=" #7FFFD4">Exit</th>
   
</tr>

  
   @foreach($employee_data as $employee_data)
  <tr>
    <td align="center"bgcolor="#5F9EA0">{{$employee_data->entrance}}</td>
    <td align="center"bgcolor="#BDB76B">{{$employee_data->outrance}}</td>
  </tr>
  @endforeach

  
 </tr>
   
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
h4
{
  text-align: center;
  color:#4682B4;
  font-family: Arial, Helvetica, sans-serif;
  font-size:20px;
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
