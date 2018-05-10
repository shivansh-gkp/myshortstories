<?php
session_start();
?>
<?php
 ob_start();
 if(($_SESSION["key"]!=1))
  {
	$_SESSION["key"]=2;
	header( "Location: log.php" ); 
  } 
?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <link href='//fonts.googleapis.com/css?family=Flamenco' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
   div.gallery 
   {
    margin: 5px;
    border: 3px solid #ccc;
    float: left;
    width: 200px;
   }
    .thumbnail
	{
		padding: 1px;
		border-radius: 6px;
	}
   @media screen and (max-width: 468px) 
   {
        .smalls
		 {
           font-size:20px;
         }
		.smalla
		 {
           font-size:15px;
         }
    }
   textarea.form-control 
   {
    height: 100px;
   }
   .form-control
   {
	   font-size: 16px;
   }

   .margin0
	{
		margin-bottom: 0px;
	}
    .margin5
	{
		margin-bottom: 5px;
	}
    body  
	{
     background-image: url('background.jpg');
     background-repeat: no-repeat;
	 background-size: 1366px 768px;
     background-attachment: fixed;
     }
    p
	{
	 text-align: center;
	}
    h2
    {
	 color:#FFFFFF;
    }
	h2
    {
	 color:#777;
	 text-align: center;
	 margin-top: 7px;
    }
	
	h5
    {
	 color:#FFFFFF;
    }
	.w1
	{
		font-size: 22px;
		color:white;
		font-family:'Flamenco';
	}
	
</style>
</head>
<head>
<title>MyShortStories</title>
</head>
<body onload="stories()">
 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
   <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>  
     </button>
      <a class="navbar-brand w1" href="#"><b>MyShortStories</b></a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
   <?php
	if(($_SESSION['key']==0))
	{
	 echo"
     <ul class='nav navbar-nav'>
	    <li><a href='account.php'><span class='glyphicon glyphicon-pencil'></span> STORIES</a></li>
        <li><a href='signup.php'>SIGN-UP</a></li>
        <li class='dropdown'>
        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>MORE<span class='caret'></span></a>
        <ul class='dropdown-menu'>
		<li><a href='contact.php'>CONTACT</a></li>
          <li><a href='about.php'>ABOUT</a></li>
        </ul>
		</li>
		<div class='col-md-5'>
        </div>
	 </ul>
	 <ul class='nav navbar-nav navbar-right'>
      <li><a href='signin.php'><span class='glyphicon glyphicon-log-in'></span> SIGN-IN</a></li>
    </ul>";
	}
	else 
	{
		echo"
		<ul class='nav navbar-nav'>
	     <li><a href='account.php'><span class='glyphicon glyphicon-pencil'></span> STORIES</a></li>
        <li><a href='setting.php'><span class='glyphicon glyphicon-cog'></span> SETTINGS</a></li>
        <li class='dropdown'>
        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>MORE<span class='caret'></span></a>
        <ul class='dropdown-menu'>
		<li><a href='contact.php'>CONTACT</a></li>
          <li><a href='about.php'>ABOUT</a></li>
        </ul>
		</li>
		<div class='col-md-5'>
        </div>
	 </ul>
	 <ul class='nav navbar-nav navbar-right'>
      <li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
    </ul>";
	}
	?>
	</div>
	</div>
  </div> 
 </nav>
</body>
 <div class="container-fluid" style="max-width:1320px;margin-top:70px;">
 <div class="row">
  <div class="col-sm-2" >
  </div>
  <div class="col-sm-7">
  <div class="thumbnail">
  <div class="jumbotron" style="background-image: url(myshortstory.jpg); background-size: 100%; margin-bottom: 0px;">
    <div class="container">
	<div class="gallery">
      <img src="images/male1.png" class="img-responsive" alt="Cinque Terre" onclick="profilepic(this.src)">
    </div>
	<div class="gallery">
      <img src="images/male4.png" class="img-responsive" alt="Cinque Terre" onclick="profilepic(this.src)">
    </div>
	<div class="gallery">
      <img src="images/male2.png" class="img-responsive" alt="Cinque Terre"  onclick="profilepic(this.src)">
    </div>
	<div class="gallery">
      <img src="images/male3.png" class="img-responsive" alt="Cinque Terre"  onclick="profilepic(this.src)">
    </div>
   </div>
  </div>
  </div>
  </div>
   <div class="col-sm-3">
  </div>
 </div>
 </div>
 <script>
 function profilepic(str)
            {
				var myObj;
					cp=str;
					var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange = function()
					{
						if (this.readyState == 4 && this.status == 200) 
						{
						myObj = this.responseText;
						}
						if(myObj==1)
						{
						window.location="account.php";
						}	
					};
					xmlhttp.open("GET", "profilepic.php?pic="+cp, true);
					xmlhttp.send();				
            }
 </script>
</html>