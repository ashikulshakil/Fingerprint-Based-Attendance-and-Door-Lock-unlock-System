@extends('layouts.default')
@section('title','Finger Print System')

@section('content')

<html>
<body>



<div class="row">
  <div class="column" style="background-color:white;">
    <h4><b>Step 1:</b> At first it needs to send a request to the admin by clicking  the "Add" button.</h4>   
  <h4><b>Step 2:</b>Admin can accept or reject the request.</h4> 
  <h4><b>Step 3:</b>If admin accepts the request,the person will have to press the fingerprint sensor three times by the same finger.</h4>
  <h4><b>Step 4:</b>Then he will get an id number that is sent by the admin.</h4> 
  </div>
  <div class="column" style="background-color:white;">
    
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
h4 {
    font-family: "Courier New", Courier, monospace;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
    font-size:30px;
}

h6 {
    font-family: "Courier New", Courier, monospace;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
    font-size:20px;
}
img {
    border-radius: 8px;
}









.column {
    float: left;
    width: 50%;
    padding: 10px;
    height: 100%; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}






</style>










</html>
@stop
