<?php
session_start();
?>
<?php
 $name=$_POST['username'];
 $password=$_POST['password'];
 $login_id=$_POST['loginid'];
 $gender=$_POST['optradio'];
 $total=0;
 $con=mysqli_connect('localhost' , 'root' , '' , 'total_user');
 if(!$con)
   { 
	die("can not connect:". mysql_error());
	}
 $ser="SELECT*FROM userid_password";
 $mydata=mysqli_query($con,$ser);
 do
  {
	$remain = mysqli_fetch_array($mydata);
    $data=$remain['loginid'];
    if($login_id==$data)
	{
	  $_SESSION["control"]=1;
	  header( "Location: index.php" );
	}		
  }
  while($remain);
  if($_SESSION["control"]==0)
  {
	$_SESSION["control"]=2;  
	$_SESSION["key"]=1;  
	$par="INSERT INTO userid_password (name,password,loginid,gender,totalstories) VALUE('$name','$password','$login_id','$gender','$total')";
	mysqli_query($con,$par);
	$_SESSION["name"]=$name;
	$_SESSION["loginid"]=$login_id;
  }
  mysqli_close($con);
  header( "Location: imageselect.php" );
?>