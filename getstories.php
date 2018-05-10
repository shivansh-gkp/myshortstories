<?php
session_start();
?>
<?php
 $alldata = array();
 $data0 = array();
 $data1 = array();
 $data2 = array();
 $data3 = array();
 $data4 = array();
 $data5 = array();
 $data6 = array();
 $picsrrc="";
 $x=0;
 $conn = new mysqli("localhost", "root", "", "total_user");
 if(!$conn)
   { 
	die("can not connect:". mysql_error());
	}
 $result1 = $conn->query("SELECT stories, name, loginid, time, date, alignment FROM stories");
 while($rs = $result1->fetch_array(MYSQLI_ASSOC)) 
  {
	   $data0[$x]=$rs["name"];  
       $data1[$x]=$rs["loginid"];
	   $data2[$x]=$rs["stories"];
	   $data3[$x]=$rs["date"];
	   $data4[$x]=$rs["time"];
	   $data5[$x]=$rs["alignment"];
	   $result2 = $conn->query("SELECT picsrc,totalstories FROM userid_password WHERE loginid= '".$data1[$x]."'");
	   while($rsa = $result2->fetch_array(MYSQLI_ASSOC)) 
       {
	     $data6[$x]=$rsa["picsrc"];
		 $data7[$x]=$rsa["totalstories"];
	   }
       $x++;
	   if($x==50)
	   {
		   break;
	   }
  }
  $alldata[0]= $data0;
  $alldata[1]= $data1;
  $alldata[2]= $data2;
  $alldata[3]= $data3;
  $alldata[4]= $data4;
  $alldata[5]= $data5;
  $alldata[6]= $data6;
   $alldata[7]= $data7;
  $myJSON = json_encode($alldata);
 $conn->close();
 echo $myJSON;
?>