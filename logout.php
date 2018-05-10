<?php
 session_start(); 
    $_SESSION["key"]=0;
	$_SESSION["name"]="";
	$_SESSION["loginid"]="";
	 header( "Location: signin.php" );
?>