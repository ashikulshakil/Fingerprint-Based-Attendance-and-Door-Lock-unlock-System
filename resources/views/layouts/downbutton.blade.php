<!DOCTYPE html>

<html>
<head>
</head>
<body>

<ul>
     <div class="left">
    <li><a href="{{URL::to('/home')}}">HOME</a></li> 
    </div>

    @if(Auth::check())
    <div class="left">
     <li><a href="{{URL::to('/requestdata')}}">REQUESTS</a></li> 
    </div>
    <div class="left">
     <li><a href="{{URL::to('/showdata')}}">SHOW RECORD</a></li> 
    </div>
    <div class="right">
     <li><a href="{{URL::to('/logout')}}">Logout</a></li> 
    </div>
    <div class="right">
     <li><a href="{{URL::to('/admin')}}">Change Password</a></li> 
    </div>
    
   @else
   <div class="right">
     <li><a href="{{URL::to('/adminlogin')}}">Admin Login</a></li>
    </div>
    <div class="right">
    <li><a href="{{URL::to('/about')}}">About</a></li> 
    </div>
    @endif
</ul>
</body>
