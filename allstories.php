<?php
session_start();
?>
<?php
 $alldata= array();
 $data1 = array();
 $data2 = array();
 $data3 = array();
 $data4 = array();
 $totalstories;
 $picsrrc="";
 $x=0;
 $conn = new mysqli("localhost", "root", "", "total_user");
 if(!$conn)
   { 
	die("can not connect:". mysql_error());
   }
 $result1 = $conn->query("SELECT stories, loginid, time, date, alignment FROM stories");
 $result2 = $conn->query("SELECT picsrc, totalstories FROM userid_password WHERE loginid= '".$_SESSION["loginid"]."'");
 while($rs = $result1->fetch_array(MYSQLI_ASSOC)) 
  {
   if($rs["loginid"] == $_SESSION["loginid"])
	  {
       $data1[$x]=$rs["stories"];
	   $data2[$x]=$rs["date"];
	   $data3[$x]=$rs["time"];
	   $data4[$x]=$rs["alignment"];
       $x++;
	  }
  }
  while($rs = $result2->fetch_array(MYSQLI_ASSOC)) 
  {
	$totalstories=$rs["totalstories"];
    $picsrc=$rs["picsrc"];
  }
  $alldata[0]= $data1;
  $alldata[1]= $data2;
  $alldata[2]= $data3;
  $alldata[3]= $_SESSION["name"];
  $alldata[4]= $data4;
  $alldata[5]=$picsrc;
  $alldata[6]=$totalstories;
  $myJSON = json_encode($alldata);
 $conn->close();
 echo $myJSON;
?>