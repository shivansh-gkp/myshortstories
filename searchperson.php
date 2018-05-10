<?php
session_start();
?>
<?php
 $alldata= array();
 $data1 = array();
 $data2 = array();
 $data3 = array();
 $data4 = array();
 $x=0;
 $conn = new mysqli("localhost", "root", "", "total_user");
 if(!$conn)
   { 
	die("can not connect:". mysql_error());
	}
 $result2 = $conn->query("SELECT picsrc, loginid, name, totalstories FROM userid_password WHERE loginid= '".$_GET['search']."' OR name= '".$_GET['search']."'");
 while($rs = $result2->fetch_array(MYSQLI_ASSOC)) 
  {
       $data1[$x]=$rs["name"];
	   $data2[$x]=$rs["loginid"];
	   $data3[$x]=$rs["picsrc"];
	   $data4[$x]=$rs["totalstories"];
       $x++;
  }
  $alldata[0]= $data1;
  $alldata[1]= $data2;
  $alldata[2]= $data3;
  $alldata[3]= $data4;
  $myJSON = json_encode($alldata);
  $conn->close();
 echo $myJSON;
?>