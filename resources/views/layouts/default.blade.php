<!doctype html>
<html>
<head>
<!-- my head section goes here -->
<!-- my css and js goes here -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>@yield('title')</title>
<style>

.container
{

} 

div.container {
 width: 100%;
 height: 100%;
margin:0 auto;
}
 
ul {
list-style-type: none;
margin: 0;
padding: 0;
text-align: center;
}
 
.left {
float: left;
}
.right {
float: right;
}

 
li a {
display: block;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-family: "Times New Roman", Times, serif;
font-size:16px
border-radius: 15px;
}

li a:hover {
background-color: red;
}
/*header, footer {
padding: 1em;
color: gray;
background-color: black;
clear: left;
text-align: center;
{{-- width:500px; --}}
}*/
header{
/*padding: 5em;*/
color: gray;
background-color:black;
clear: left;
text-align: center;
height: 50px;
}
footer{
padding: .5em;
color: white;
background-color:black;
clear: left;
text-align: center;

font-size:20px
{{-- width:500px; --}}
}
.contents{ 
margin-left: 1px;
height: 100%;
width: 100%;
background-color:	#DCDCDC;
{{-- border-left: 1px solid gray; --}}
{{-- padding: 1em; --}}

overflow: hidden;

{{-- height: 300px; --}}
}

</style>
</head>
 
<body> 
<div class="container">


<header> @include('layouts.downbutton') </header>

<div class="contents"> @yield('content') </div>

</div>

<footer> @include('layouts.footer') </footer>
</body>
 
</html>
