<?php
session_start();
?>
<?php
 $delete = json_decode($_GET['todelete']);
 $deletethis=addslashes($delete->story);
 $conn = new mysqli("localhost", "root", "", "total_user");
 if(!$conn)
   { 
	die("can not connect:". mysql_error());
	}
  $result = $conn->query("SELECT loginid,stories,date,time FROM stories");
  while($rs = $result->fetch_array(MYSQLI_ASSOC)) 
    {
	if(($rs['loginid']==$_SESSION["loginid"])&&($rs['stories']==$delete->story)&&($rs['date']==$delete->dates)&&($rs['time']==$delete->times))
	  {
		$conn->query("DELETE FROM stories WHERE loginid='".$rs['loginid']."' AND stories='".$deletethis."' AND date='".$rs['date']."' AND time='".$rs['time']."'"); 
	  }
   }
   $result2 = $conn->query("SELECT totalstories FROM userid_password WHERE loginid= '".$_SESSION["loginid"]."'");
  while($rs = $result2->fetch_array(MYSQLI_ASSOC)) 
   {
	$totalstories=$rs["totalstories"];
   }
   $totalstories--;
   $conn->query("UPDATE userid_password SET totalstories='".$totalstories."' WHERE loginid='".$_SESSION['loginid']."'"); 
   $_GET['todelete']="";
  $conn->close();
?>
