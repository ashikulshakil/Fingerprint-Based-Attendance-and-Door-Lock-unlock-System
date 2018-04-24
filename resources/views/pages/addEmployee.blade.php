@extends('layouts.default')
@section('title','Finger Print System')
@section('content')

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<div class="logo"></div>

 
<div class="login-block">
         @if ($errors->has('reg'))
        <span class="help-block">
            <strong style="color:red">{{ $errors->first('reg') }}</strong>
        </span>
    @endif
      

      @if ($errors->has('sensorId'))
        <span class="help-block">
            <strong style="align:center;color:red">{{ $errors->first('sensorId') }}</strong>
        </span>
    @endif                   
                                
    <h1>Add Student Data</h1>
    <form action="{{ route('postAdd')}}" method="post">
    <input type="text" name="username" placeholder="Student Name" id="username" required>
    <input type="text" name="reg" placeholder="Reg No." id="regname" required>
     <input type="text" name="sensorId" placeholder="Sensor Id" id="regname" required>
  
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
    <button>SUBMIT</button>
    </form>
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







.logo {
    width: 213px;
    height: 36px;
   
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid green;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: green;
    font-size: 28px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
   font-family: "Times New Roman", Times, serif;
}

.login-block input {
    width: 100%;
    height: 55px;
    box-sizing: border-box;
    border-radius: 15px;
    border: 1px solid green;
    margin-bottom: 20px;
    font-size: 20px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#regname {
    
    background-size: 16px 80px;
}

.login-block input#regname:focus {
    
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid red;
}

.login-block button {
    width: 100%;
    height: 50px;
    background: green;
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
}

.login-block button:hover {
    background: red;
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
@stop
