<?php
$user='root';
$pass='';
$db='fingerprintsensor';
if(!empty($_GET["id"])){
  $A= $_GET["id"]; 
//$A="240";
$fp = fopen("s.txt", "w");
     if($fp){  
       fwrite($fp, $A);
       fclose($fp);
	 }
	 $conn = mysqli_connect('localhost',$user,$pass,$db);
	 $sql = "UPDATE ipaddress SET ip = '$A' ";
             $conn->query($sql);
}
	 
?>	 