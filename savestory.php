<?php
session_start();
?>
<?php
 $story=addslashes($_POST['story']);
 $alignment="";
 $totalstories;
 if(isset($_POST['optradio']))
	{
		$alignment=$_POST['optradio'];
	}
 if((strlen($story)<301)&&(strlen($story)!=0))
 {
  date_default_timezone_set("Asia/Kolkata");
  $date=date("d/m/Y");
  $time=date("h:i:sa");
  $loginid=$_SESSION['loginid'];
  $name=$_SESSION['name'];
  $con=mysqli_connect('localhost' , 'root' , '' , 'total_user');
  if(!$con)
    { 
 	 die("can not connect:". mysql_error());
	 }
  $result2 = $con->query("SELECT totalstories FROM userid_password WHERE loginid= '".$_SESSION["loginid"]."'");
  while($rs = $result2->fetch_array(MYSQLI_ASSOC)) 
   {
	$totalstories=$rs["totalstories"];
   }
   $totalstories++;
   $con->query("UPDATE userid_password SET totalstories='".$totalstories."' WHERE loginid='".$_SESSION['loginid']."'"); 
  $ser="INSERT INTO stories (name,loginid,stories,date,time,alignment) VALUES('$name','$loginid','$story','$date','$time','$alignment')";
  $mydata=mysqli_query($con,$ser);
  mysqli_close($con);
 }
 header( "Location: account.php" );
?>