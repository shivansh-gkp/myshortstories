<?php
session_start();
?>
<?php
 ob_start();
 if(($_SESSION["key"]!=1))
  {
	header( "Location: index.php" ); 
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
   .jumbotron 
    {
     padding-top: 40px;
     padding-bottom: 0px;
    }
	.thumbnail
	{
		padding: 1px;
		border-radius: 6px;
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
      <a class="navbar-brand w1" href="index.php"><b>MyShortStories</b></a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav">
	     <li ><a href="account.php"><span class="glyphicon glyphicon-pencil"></span> STORIES</a></li>
        <li class="active"><a href="setting.php"><span class="glyphicon glyphicon-cog"></span> SETTINGS</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE<span class="caret"></span></a>
        <ul class="dropdown-menu">
		<li><a href="contact.php">CONTACT</a></li>
          <li><a href="about.php">ABOUT</a></li>
        </ul>
		</li>
		<div class="col-md-5">
        <form class="navbar-form" action="search.php" method="post">
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
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
	</div>
	</div>
  </div> 
 </nav>
 </nav>
</body>
 <div class="container-fluid" style="max-width:1320px;margin-top:70px;">
 <div class="row">
  <div class="col-sm-2" >
  </div>
  <div class="col-sm-7">
  <div class="thumbnail">
  <div class="jumbotron" style="background-image: url(background.jpg); background-size: 100%; margin-bottom: 0px;">
    <div class="container">
  <form name="changep" class="form-horizontal" method="post" action="changep.php">
    <div class="form-group">
      <label class="control-label col-sm-4"><h5>PASSWORD:</h5></label>
      <div class="col-sm-6">
        <input name="change1" type="password" class="form-control" placeholder="Current password" name="loginid" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd"><h5>NEW PASSWORD:</h5></label>
      <div class="col-sm-6">          
        <input name="change2" type="password" class="form-control" placeholder="New password" name="password" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-4" for="pwd"><h5>RETYPE PASSWORD:</h5></label>
      <div class="col-sm-6">          
        <input name="change3" type="password" class="form-control" placeholder="New password" name="password" required>
      </div>
    </div>
    <div class="form-group">        
      <div class="control-label col-sm-4 ">
        <button type="submit" class="btn btn-default" value="Submit">Save Change</button>
      </div>
    </div>
   </form>
   </div>
  </div>
  </div>
  </div>
   <div class="col-sm-3">
 
  </div>
 </div>
 </div>
 <script>
 function change()
            {
				 var x = document.forms["changep"]["change1"].value;
				 var y = document.forms["changep"]["change2"].value;
				 var z = document.forms["changep"]["change3"].value;
                 if (y == z) 
				  {
					cp={"currentp":x,"newp":y};
					cp1=JSON.stringify(cp);
					var xmlhttp = new XMLHttpRequest();
					xmlhttp.open("GET", "changep.php?changepass="+cp1, true);
					xmlhttp.send();
				  }
				 else
				  {
					 alert("WRONG ENTRIES");
				  }
            }
 </script>
</html>