<?php
session_start();
?>
<?php
$con=mysqli_connect('localhost' , 'root' , '' , 'total_user');
if (isset($_POST['loginid']))
 {
 $login_id=$_POST['loginid'];
 $password=$_POST['password'];
 if(!$con)
   { 
	die("can not connect:". mysql_error());
	}
 $ser="SELECT*FROM userid_password";
 $mydata=mysqli_query($con,$ser);
 do
  {
	$remain = mysqli_fetch_array($mydata);
    $data1=$remain['loginid'];
	$data2=$remain['password'];
	$data3=$remain['name'];
    if(($login_id==$data1)&&($password==$data2))
	{
	  $_SESSION["key"]=1;
	  $_SESSION["name"]=$data3;
	  $_SESSION["loginid"]=$data1;
	  header( "Location: account.php" );
	}		
  }
  while($remain);
 }
  if($_SESSION["key"]==0)
  {
	 header( "Location: signin.php" ); 
  }	  
  mysqli_close($con);
?>