<?php
session_start();
?>
<?php
 $picsrc = $_GET['pic'];
 $conn = new mysqli("localhost", "root", "", "total_user");
 if(!$conn)
   { 
	die("can not connect:". mysql_error());
	}
  $conn->query("UPDATE userid_password SET picsrc='".$picsrc."' WHERE loginid='".$_SESSION["loginid"]."'"); 
  $_GET['pic']="";
  $conn->close();
  $x=1;
  echo $x;
?>
