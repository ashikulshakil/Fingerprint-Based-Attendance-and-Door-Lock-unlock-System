@extends('layouts.default')
@section('title','Finger Print System')

@section('content')

<html>
<body>
  <head>
   
  </head>

<center>
  <div class="login-block">
  <form action="{{ route('showRecord')}}" method="post">
    <input type="text" name="regname" placeholder="Search By Reg No." id="regname"required>
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
    <br>
    <button>OK</button>

    </form>
  </div>
  </center>
<br>
    <br>
<br>
  <br>


<center>
  <div class="login-block">
  <form action="{{ route('showRecordDate')}}" method="post">
    <lebel>Search by Date</lebel>
    <br>
    <input type="date" name="date" placeholder="" id="regname"required>
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
    <br>
    <button>OK</button>
    </form>
  </div>
  </center>


 @if(count($employee_data)>0)

  <h1>Student List</h1>


  
<table border="1"align="center"bordercolor="white">

  <tr>
    <th width="100"bgcolor=" #7FFFD4">Sensor Id</th>
    <th width="200"bgcolor="  #7FFFD4">Reg No.</th> 
    <th width="200"bgcolor="  #7FFFD4">Name</th>
    <th width="200" colspan="2"bgcolor=" #7FFFD4">Details/Delete</th>
  </tr>
  @endif
  @if(count($employee_data)>0)
   @foreach($employee_data as $employee_data)
  <tr>
    <td align="center"bgcolor="#5F9EA0">{{$employee_data->sensorId}}</td>
    <td align="center"bgcolor="#5F9EA0">{{$employee_data->reg}}</td> 
    <td align="center"bgcolor="#5F9EA0">{{$employee_data->name}}</td>
     <td align="center"bgcolor="#B0C4DE"><a href="{!! route('test2', ['prisw2'=>$employee_data->reg]) !!}"class="button">Details</a></td>
   
 <td align="center"bgcolor="#B0C4DE"><a href="{!! route('test1', ['prisw1'=>$employee_data->sensorId]) !!}"class="button1">Delete</a></td>



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


.button1 {
    background-color: red;
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
    background: #4CAF50;
    box-sizing: border-box;
    border-radius: 15px;
    border: 1px solid #e15960;
    color: white;
    
    text-transform: uppercase;
    font-size: 15px;
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
