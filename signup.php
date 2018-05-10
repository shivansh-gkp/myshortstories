<?php
session_start();
if($_SESSION["key"]==1)
{
	header( "Location: account.php" ); 
}
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
<head>
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
     <ul class="nav navbar-nav">
	    <li><a href="account.php"><span class="glyphicon glyphicon-pencil"></span> STORIES</a></li>
        <li class="active"><a href="signup.php">SIGN-UP</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE<span class="caret"></span></a>
        <ul class="dropdown-menu">
		<li><a href="contact.php">CONTACT</a></li>
          <li><a href="about.php">ABOUT</a></li>
        </ul>
		</li>
		<div class="col-md-5">
        <form class="navbar-form" action="searchresult.php" method="post">
         <div class="input-group">
            <input type="text" class="form-control has-search-icon" placeholder="Search" name="search" >
            <div class="input-group-btn">
                <button class="btn btn-default" align="right" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
         </div>
        </form>
        </div>
	 </ul>
	 <ul class="nav navbar-nav navbar-right">
      <li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> SIGN-IN</a></li>
    </ul>
	</div>
	</div>
  </div> 
 </nav>
</body>
<body background="background.jpg">
<div class="pad">
<?php
  function customError($errno, $errstr)
   {
   }
   set_error_handler("customError");
   {
    echo'';
   }
 if($_SESSION["control"]==1)
  {
   $abc=$_SESSION["control"]; 
   echo '<tr><b><h3>**THE ACCOUNT ALREADY EXIST**</h3><b></tr>';  
  }
  if($_SESSION["control"]==2)
  {
   $abc=$_SESSION["control"]; 
   echo '<tr><b><h3>**ACCOUNT CREATED, NOW LOGIN**</h3><b></tr>';  
  }
 $_SESSION["control"]=0;
?>
<p align="left" style="font-family:Courier; color:white; font-size: 45px;">
 <b><h1>CREATE AN ACCOUNT</h1></b>
</p>
<p align="left" style="font-family:Courier; color:white; font-size: 20px;">
 <b><h4> If You Haven't Already.</h4></b>
</p>
<div class="container">
  <form class="form-horizontal" action="create.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email"><h5>USER-NAME:</h5></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" placeholder="User-name (4-15 character)" pattern=".{4,15}" name="username" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email"><h5>LOGIN-ID:</h5></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" pattern=".{4,15}" placeholder="Login-id (4-15 character)" name="loginid" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd"><h5>PASSWORD:</h5></label>
      <div class="col-sm-6">          
        <input type="password" class="form-control" pattern=".{4,15}" placeholder="Enter password (4-15 character)" name="password" required>
		
      </div>
    </div>
	<div class="form-group">
	<div class="col-sm-2">
	</div>
	<div class="col-sm-6">
	<label class="radio-inline"><input type="radio" name="optradio" value="m" checked><h5>Male</h5></label>
    <label class="radio-inline"><input type="radio" name="optradio" value="f"><h5>Female</h5></label>
	</div>
	</div>
	<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>
</div>
</body>
</head>
</html>