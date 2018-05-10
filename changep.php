<?php
session_start();
?>
<?php
 
 $current = $_POST['change1'];
 $new1 = $_POST['change2'];
 $new2 = $_POST['change3'];
 $conn = new mysqli("localhost", "root", "", "total_user");
 $x;
 if($new1==$new2)
 {
  if(!$conn)
   { 
	die("can not connect:". mysql_error());
	}
  $result = $conn->query("SELECT loginid,password,name FROM userid_password");
  while($rs = $result->fetch_array(MYSQLI_ASSOC)) 
    {
	if(($rs['loginid']==$_SESSION["loginid"])&&($rs['password']==$current))
	  {
		$conn->query("UPDATE userid_password SET password='".$new1."' WHERE loginid='".$rs['loginid']."'"); 
	  }
   }
  $conn->close();
 }
  header( "Location: setting.php" );
?>
