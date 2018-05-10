<?php
session_start();
?>
<?php
 $search=$_GET['author'];
 $alldata= array();
 $data1 = array();
 $data2 = array();
 $data3 = array();
 $data4 = array();
 $picsrrc="";
 $x=0;
 $conn = new mysqli("localhost", "root", "", "total_user");
 if(!$conn)
   { 
	die("can not connect:". mysql_error());
	}
 $result1 = $conn->query("SELECT stories, loginid, time, date, alignment FROM stories");
 $result2 = $conn->query("SELECT picsrc,name FROM userid_password WHERE loginid= '".$search."'");
 while($rs = $result1->fetch_array(MYSQLI_ASSOC)) 
  {
   if($rs["loginid"] == $search)
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
    $picsrc=$rs["picsrc"];
	$alldata[3]= $rs["name"];
  }
  $alldata[0]= $data1;
  $alldata[1]= $data2;
  $alldata[2]= $data3;
  $alldata[4]= $data4;
  $alldata[5]=$picsrc;
  $myJSON = json_encode($alldata);
 $conn->close();
 echo $myJSON;
?>