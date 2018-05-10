<?php
session_start();
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
		.img-responsive 
		{
		 margin: 0 auto;
		}
    }
	.panel-default > .panel-heading 
	{
		color: #333;
		background-color: #222;
		border-color: #ddd;
	}
	.panel-body 
	{
		padding: 15px;
		padding-left: 0px;
		padding-right: 0px;
		padding-top: 10px;
		padding-bottom: 10px;
    }
	hr 
	{
    margin-top: 0px;
    margin-bottom: 0px;
   }
   .thumbnail
	{
		padding: 1px;
		border-radius: 6px;
		margin-bottom: 0px;
	}
   .jumbotron 
    {
     padding-top: 40px;
     padding-bottom: 0px;
    }
	.list-group
	{
    margin-bottom: 0px;
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
		
	}
	.n
	{
		color: white;
	}
	a { color: #333; }
	a:visited { color: #333; }
	a:hover { color: #333; }
</style>
</head>
<head>
<title>MyShortStories</title>
</head>
<input type="hidden" id="tosearch" value="<?php echo $_POST['search']; ?>">
<body onload="searchthis()">
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
	function customError($errno, $errstr)
    {
    }
    set_error_handler("customError");
    {
     echo'';
    }
	if(($_SESSION['key']==0)||(!isset($_SESSION['key'])))
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
	else if ($_SESSION['key']==1)
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

 <div class="container-fluid" style="max-width:1320px;margin-top:70px;">
 <div class="row">
  <div class="col-sm-3">
  
  </div>
  <div class="col-sm-6">
  <div id="result" class="panel panel-default">
    <div class="panel-heading n"><h2 class="cn n">Authors</h2></div>
    </div>
	<ul class="pager">
  <li class="previous"><a onClick="previous()"><b>Previous</b></a></li>
  <li class="next"><a onClick="next()"><b>Next</b></a></li>
   </ul>
  </div>
   <div class="col-sm-3">
  </div>
 </div>
 </div>
 <script>
 var tosearch=document.getElementById("tosearch").value;
 var myObj;
 var i=0;
 var nlength;
 var plength;
 var counter;
 function next()
 {
	if(nlength>0)
	{	  
	 $("#result").empty();
	 var i;
	 if(nlength<10)
	 {
		 counter=0;
	 }
	 else
	 {
	   counter=nlength-10;
     }
	 for(i=nlength-1;i>=counter;i--)
        {
							var n1 = document.createTextNode("Name: ");
							var nt1 = document.createTextNode(myObj[0][i]);
							var b1 = document.createElement("b");
							var p1 = document.createElement("p");
							b1.appendChild(n1);
							p1.appendChild(b1);
							p1.appendChild(nt1);
							var n2 = document.createTextNode("loginId: ");
							var nt2 = document.createTextNode(myObj[1][i]);
							var b2 = document.createElement("b");
							var p2 = document.createElement("p");
							b2.appendChild(n2);
							p2.appendChild(b2);
							p2.appendChild(nt2);
							var n3 = document.createTextNode("Stories: ");
							var nt3= document.createTextNode(myObj[3][i]);
							var b3 = document.createElement("b");
							var p3 = document.createElement("p");
							b3.appendChild(n3);
							p3.appendChild(b3);
							p3.appendChild(nt3);
							var d1 = document.createElement("div");
							d1.setAttribute("class", "col-sm-7");
							d1.appendChild(p1);
							d1.appendChild(p2);
							d1.appendChild(p3);
							var img = document.createElement("img");
							img.setAttribute("src", myObj[2][i]);
							img.setAttribute("width", "85");
							img.setAttribute("height", "85");
							img.setAttribute("align", "left");
							var d2 = document.createElement("div");
							d2.setAttribute("class", "col-sm-5");
							d2.appendChild(img);
							var d3 = document.createElement("div");
							d3.setAttribute("class", "panel-body");
							d3.setAttribute("id", i);
							d3.setAttribute("onClick", "openaccount(this.id)");
							d3.appendChild(d2);
							d3.appendChild(d1);
							if(i!=(nlength))
							{
							 var hr1 = document.createElement("hr");
							 var element = document.getElementById("result");
							 element.appendChild(d3);
							 element.appendChild(hr1);
							}
							else
							{
			                 var element = document.getElementById("result");
							 element.appendChild(d3);
							}
		}
		plength=nlength;
		nlength=nlength-10;
	}
 }
 function previous()
 {
	if(plength<length1-1)
	{	  
	 $("#result").empty();
	 var i;
		  if(plength<0)
		  {
			  counter=plength+20;
			  plength=plength+10;
		  }
		  else
		  {
		    counter=plength+10;
		  }
	 for(i=counter-1;i>plength-1;i--)
        {
			var n1 = document.createTextNode("Name: ");
							var nt1 = document.createTextNode(myObj[0][i]);
							var b1 = document.createElement("b");
							var p1 = document.createElement("p");
							b1.appendChild(n1);
							p1.appendChild(b1);
							p1.appendChild(nt1);
							var n2 = document.createTextNode("loginId: ");
							var nt2 = document.createTextNode(myObj[1][i]);
							var b2 = document.createElement("b");
							var p2 = document.createElement("p");
							b2.appendChild(n2);
							p2.appendChild(b2);
							p2.appendChild(nt2);
							var d1 = document.createElement("div");
							d1.setAttribute("class", "col-sm-7");
							d1.appendChild(p1);
							d1.appendChild(p2);
							var img = document.createElement("img");
							img.setAttribute("src", myObj[2][i]);
							img.setAttribute("width", "85");
							img.setAttribute("height", "85");
							img.setAttribute("align", "left");
							var d2 = document.createElement("div");
							d2.setAttribute("class", "col-sm-5");
							d2.appendChild(img);
							var d3 = document.createElement("div");
							d3.setAttribute("class", "panel-body");
							d3.setAttribute("id", i);
							d3.setAttribute("onClick", "openaccount(this.id)");
							d3.appendChild(d2);
							d3.appendChild(d1);
							if(i!=(plength-1))
							{
							 var hr1 = document.createElement("hr");
							 var element = document.getElementById("result");
							 element.appendChild(d3);
							 element.appendChild(hr1);
							}
							else
							{
			                 var element = document.getElementById("result");
							 element.appendChild(d3);
							}
		}
		nlength=plength;
		plength=plength+10;
	}
 }
 function openaccount(id)
 {
	 window.location="authoraccount.php?loginid="+myObj[1][id];
 }
 function searchthis()
            {
                 var xmlhttp = new XMLHttpRequest();
				 xmlhttp.onreadystatechange = function()
				 {
					if (this.readyState == 4 && this.status == 200) 
					{
						myObj = JSON.parse(this.responseText);
						length1=myObj[0].length;
						nlength=length1;
						plength=length1;
						next();
					}
				 };
				 xmlhttp.open("GET", "searchperson.php?search="+tosearch, true);
				 xmlhttp.send();
            }
 </script>
</html>  