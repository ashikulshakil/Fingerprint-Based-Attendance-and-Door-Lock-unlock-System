@extends('layouts.default')
@section('title','Finger Print System')

@section('content')

<html>
<body>
  




<div class="column4" style="background-color:#aaa;">
  <div class="centered">
<h3><b>Supervised By:</b></h3>
  </div>
 </div>



   <div class="column1" style="background-color:#aaa;">
    <div class="centered">
   <img src="img/saif_sir.jpg" width="200" height="200">
    <h4><b>Md. Saiful Islam<br>Assistant Professor<br>Dept.of CSE,SUST<br>Email:saiful-cse@sust.edu</b></h4>
  </div>

</div>


<div class="column3" style="background-color:#aaa;">
    
    <div class="centered">
   
    <h3><b>Developed By:</h3>
  </div>
  </div>






    <div class="column" style="background-color:#aaa;">
    
    <div class="centered">
   <img src="img/shapath.jpg" width="200" height="200">
    <h4><b>Sayed Mahmud Al Amin<br>SUST CSE 2013 Batch<br>Phone:01923-271310<br>Email:shapathsust@gmail.com</b></h4>
  </div>
  </div>

  <div class="column2" style="background-color:#bbb;">
    <div class="centered">
    <img src="img/sh.jpg" width="200" height="200">
    <h4><b>Md. Ashikul Islam Shakil<br>SUST CSE 2013 Batch<br>Phone:01780-272460<br>Email:shakilcse96@gmail.com</b></h4>
    
 </div>
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
<br>
</body>




<style>





* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column3 {
    display:block;
color:black;
margin-left:1000px;
margin-right: 0px;
border-radius:0px;
background-color:white;
margin-top:-510px;
width:20%;

}


.column4 {
    display:block;
color:black;
margin-left:180px;
margin-right: 950px;
border-radius:0px;
background-color:white;
margin-top:-25px;
width:20%;

}




.column {
    display:block;
color:  #696969;
margin-left:900px;
margin-right: 0px;
border-radius:0px;
background-color:white;
margin-top:0px;
width:35%;
height:35%;
}

.column1 {
    
display:block;
color:  #696969;
margin-left:100px;
margin-right: 900px;
border-radius:0px;
background-color:white;
margin-top:120px;
width:35%;
height:35%;

 
}
.column2 {
    
display:block;
color:  #696969;
margin-left:900px;
margin-right: 0px;
border-radius:0px;
background-color:white;
margin-top:0px;
width:35%;
height:35%;
 
}


/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}




.centered {
    
    top: 30%;
    left: 90%;
    text-align: center;
}


img {
    border-radius: 50%;
}
h4 {
    font-family: "Courier New", Courier, monospace;
    font-weight: 500;
    line-height: 1.1;
    color: black;
    font-size:19px;
}
h3 {
    font-family: "Courier New", Courier, monospace;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
    font-size:25px;
}

.posi
{

  text-align: center;
}
.posit
{

  float: center;
}

</style>

</html>
@stop
