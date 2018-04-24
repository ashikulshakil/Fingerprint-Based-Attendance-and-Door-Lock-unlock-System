@extends('layouts.default')
@section('title','Finger Print System')
@section('content')

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<div class="logo"></div>

 
<div class="login-block">
         @if ($errors->has('password'))
        <span class="help-block">
            <strong style="color:red">{{ $errors->first('password') }}</strong>
        </span>
    @endif
      

     <div class="posi">

                            
    <h1>Login</h1>
     <form action="{{ route('login')}}" method="post">
     <input type="password" name="password" placeholder="Password"id="password" required>
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <input type="submit" value="Submit">    
    </form>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<style>
    
body
{
    height: 100%;
    width:100%;
}
    body {
   
    background-size: cover;
    font-family: Montserrat;

}





.posi
{


  text-align:center;
}



input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid   #008B8B;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=email], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid   #008B8B;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid   #008B8B;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 50%;
    background-color: #008B8B;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}


















/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
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
@stop
