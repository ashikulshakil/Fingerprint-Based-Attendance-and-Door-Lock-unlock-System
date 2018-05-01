<?php
$user='root_finger';
$pass='csecse';
$db='fingerprint';
if(!empty($_GET["id"])){
  $A= $_GET["id"]; 
//$A="240";
$fp = fopen("sha.txt", "w");
     if($fp)    {  
       fwrite($fp, $A);
       fclose($fp); // Close the file
	 }



   
 $conn = mysqli_connect('localhost',$user,$pass,$db);
date_default_timezone_set("asia/dhaka");
 $date=date("d-m-Y");
 $time=date("h:i:s A");
 
 
 
 $result="SELECT name FROM employee_list WHERE sensorId=$A";
 $r = $conn->query($result);
 $row = $r->fetch_assoc();
 $name=$row["name"];
 
 $result1="SELECT reg FROM employee_list WHERE sensorId=$A";
 $r1 = $conn->query($result1);
 $row1 = $r1->fetch_assoc();
 $reg=$row1["reg"];
 

 
 
 

 
 if($A!=null){
 if($A=="240"){
  $result5="SELECT count(id) AS total FROM request";
 $r5 = $conn->query($result5);
 $row5 = $r5->fetch_assoc();
 $coun=$row5["total"];
	  
if($coun==0)	  
{
 $sql = "INSERT INTO request (sensorId, date,time)VALUES ('$A','$date','$time')";
 $conn->query($sql);
}
else {
 $sql = "UPDATE request SET sensorId = '$A',date='$date',time='$time' ";
 $conn->query($sql);
}
 }
 else
 {
	 $sql = "INSERT INTO employee_record (sensorId,reg,name,date,entrance) VALUES('$A','$reg','$name','$date','$time')";
             $conn->query($sql);
 }
 
 
}
}
?>

<html>
<head>

</head>
</html>


