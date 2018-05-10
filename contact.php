<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link href='//fonts.googleapis.com/css?family=Flamenco' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  @media screen and (max-width: 468px) 
   {
        .smalls
		 {
           font-size:20px;
         }
		.smalla
		 {
           font-size:14px;
         }
    }
   .pad
    {
     padding-top: 40px;
     padding-bottom: 0px;
    }
   .story
    {
	   font-size: 18px;
	   margin-top: 0px;
    }
   textarea.form-control 
   {
    height: 100px;
   }
   .form-control
   {
	   font-size: 16px;
   }
   .nav1
   {
	   padding-left: 0;
       width: 70%;
       list-style: none;
   }
   .margin0
	{
		margin-bottom: 0px;
	}
    .margin5
	{
		margin-bottom: 5px;
	}
    pre 
	{
	 white-space: pre-wrap;
     word-break: normal;
	 border: 0; 
	 background-color: transparent;
	 font-family:'Flamenco';
	 margin-bottom: 0px;
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
	 h1
    {
	 color:#FFFFFF;
    }
	h2
    {
	 color:#777;
	 text-align: center;
	 margin-top: 7px;
    }
	h3
    {
	 color:#FFFFFF;
    }
	h4
    {
	 color:#FFFFFF;
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
	.wl
	{
		color:white;
		text-align:left;
	}
	.wr
	{
		color:white;
		text-align:right;
	}
	.cn
	{
		color:white;
		text-align:center;
	}
	.n
	{
		color: #333;
	}
 </style>
</head>
<title>MyShortStories</title>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
   <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>  
     </button>
      <a class="navbar-brand w1" href="index.php"><b>MyShortStories</b></a>
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
		<li class='active'><a href='contact.php'>CONTACT</a></li>
          <li><a href='about.php'>ABOUT</a></li>
        </ul>
		</li>
		<div class='col-md-5'>
        <form class='navbar-form' action='searchresult.php' method='post'>
         <div class='input-group'>
            <input type='text' class='form-control has-search-icon' placeholder='Search' name='search' >
            <div class='input-group-btn'>
                <button class='btn btn-default' align='right' type='submit'><i class='glyphicon glyphicon-search'></i></button>
            </div>
         </div>
        </form>
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
		<li class='active'><a href='contact.php'>CONTACT</a></li>
          <li><a href='about.php'>ABOUT</a></li>
        </ul>
		</li>
		<div class='col-md-5'>
        <form class='navbar-form' action='searchresult.php' method='post'>
         <div class='input-group'>
            <input type='text' class='form-control has-search-icon' placeholder='Search' name='search' >
            <div class='input-group-btn'>
                <button class='btn btn-default' align='right' type='submit'><i class='glyphicon glyphicon-search'></i></button>
            </div>
         </div>
        </form>
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
<body background="background.jpg">
<div class="pad">
<p style="font-family:Courier; color:white; font-size: 45px;">
<b><h1>CONTACT</h1></b>
<b><h3>You can mail me at:-</h3>
<h5>xyzpandey@gmail.com</h5></br></b>
</p>
</div>
</body>
</html>