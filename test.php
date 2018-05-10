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
    }
   .jumbotron 
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
      <a class="navbar-brand w1" href="#"><b>MyShortStories</b></a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav">
	     <li><a href="#"><span class="glyphicon glyphicon-pencil"></span> STORIES</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> SIGNUP</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE<span class="caret"></span></a>
        <ul class="dropdown-menu">
		<li><a href="#">FOLLOWERS</a></li>
          <li><a href="#">F-REQUEST</a></li>
          <li><a href="#">NOTIFICATION</a></li>
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
      <li><a href="setting.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
	</div>
	</div>
  </div> 
 </nav>
</body>
 <div class="container-fluid" style="max-width:1320px;margin-top:70px;">
 <div class="row">
  <div class="col-sm-2" id="authorpic" >
  
  </div>
  <div class="col-sm-7">
  <div id="indemo">
  </div>
  </div>
   <div class="col-sm-3">
  </div>
 </div>
 </div>
 <script>
 var myObj;
 var storydel;
 function pic(id)
	{
		var inn = id.substring(1,(id.length)); 
		var i=inn.valueOf();
		$("#authorpic").empty();
		var division1 = document.createElement("div");
		division1.setAttribute("class", "thumbnail");
		var profilepicture = document.createElement("IMG");
		var node = document.createTextNode(myObj[0][i]);
		var para = document.createElement("h2");
		para.appendChild(node);
		profilepicture.setAttribute("src", myObj[6][i]);
		profilepicture.setAttribute("class", "img-responsive");
		profilepicture.setAttribute("alt", "profilepic");
		profilepicture.setAttribute("id", "pic");
		profilepicture.setAttribute("width", "245");
		profilepicture.setAttribute("height", "245");
		division1.appendChild(profilepicture);
		division1.appendChild(para);
		var setpic = document.getElementById("authorpic");
		setpic.appendChild(division1);
	}
 function download(id)
 {
	var loc=document.createElement("canvas");
	loc.setAttribute("width", "2880");
	loc.setAttribute("height", "1800");
	var graph=loc.getContext("2d");
	var img = new Image();
	img.src='myshortstory.jpg';
	graph.drawImage(img,10,10,2880,1800);
	graph.font="120px Flamenco";
	graph.fillStyle="white";
	graph.textAlign="centre";
	var text = myObj[2][id];
    var eachLine = text.split('\n');
	var x=0;
	var startline=0;
	for(var i=0; i<eachLine.length; i++)
	{
	 if(eachLine.length<=4)
	 {
		 startline=700;
	 }
	 if((eachLine.length>4)&&(eachLine.length<=6))
	 {
		 startline=600;
	 }
	 if((eachLine.length>6)&&(eachLine.length<=9))
	 {
		 startline=400;
	 }
	 if((eachLine.length>9)&&(eachLine.length<=12))
	 {
		 startline=300;
	 }
     if(myObj[5][id]=='cn')
	 {
		 graph.textAlign = "center";
		 graph.fillText(eachLine[i],1440,startline+x);
	 }
	 if(myObj[5][id]=='wl')
	 {
		 graph.textAlign = "left";
		 graph.fillText(eachLine[i],300,startline+x);
	 }
	 if(myObj[5][id]=='wr')
	 {
		 graph.textAlign = "right";
		 graph.fillText(eachLine[i],2580,startline+x);
	 }
	 x=x+120;
	}
	  graph.font="90px Flamenco";
	  graph.fillText("-"+myObj[0][id],2480,1600);
	  var download = document.getElementById("download"+id);
        var image = loc.toDataURL("image/png")
                    .replace("image/png", "image/octet-stream");
        download.setAttribute("href", image);
 }
 function stories()
 {
  var xmlhttp = new XMLHttpRequest();
  var i;
  var length1;
  xmlhttp.onreadystatechange = function()
   {
    if (this.readyState == 4 && this.status == 200) 
	{
        myObj = JSON.parse(this.responseText);
		length1=myObj[0].length;
		if(myObj[5]=="")
			{
			 window.location="imageselect.php"; 
			}
        for(i=length1-1;i>=0;i--)
        {
			var x=myObj[5][i]+" smalls";
			var division1 = document.createElement("div");
			division1.setAttribute("class", "thumbnail");
			division1.setAttribute("id", "x"+i);
			division1.setAttribute("onmouseover", "pic(this.id)");
			var division2 = document.createElement("div");
			var preelement = document.createElement("PRE");
			var a = document.createElement("a");
			var button1 = document.createElement("button");
			var node2 = document.createTextNode("Download ");
			a.setAttribute("download", "image.png");
			a.setAttribute("id", "download"+i);
			button1.setAttribute("type", "submit");
			button1.setAttribute("class", "btn btn-default ");
			button1.setAttribute("id", i);
			button1.setAttribute("onClick","download(this.id);");			
			var span1 = document.createElement("span");
			span1.setAttribute("class", "glyphicon glyphicon-download-alt");
			button1.appendChild(node2);
			button1.appendChild(span1);
			a.appendChild(button1);
			division2.setAttribute("class", "jumbotron");
			division2.setAttribute("style", "background-image: url(myshortstory.jpg); background-size: 100%; margin-bottom: 5px;");
			var para = document.createElement("h2");
			var para1 = document.createElement("h3");
			para.setAttribute("class", x);
			para1.setAttribute("class", "wr smalla");
			var node = document.createTextNode(myObj[2][i]);
			var node1 = document.createTextNode("-"+myObj[0][i]);
			para.appendChild(node);
			para1.appendChild(node1);
			preelement.appendChild(para);
			preelement.appendChild(para1);
			division2.appendChild(preelement);
			division1.appendChild(division2);
			division1.appendChild(a);
			var element = document.getElementById("indemo");
			element.appendChild(division1);
		}
		document.getElementById("story1").innerHTML = "stories:" + length1;
    }
  };
    xmlhttp.open("GET", "getstories.php", true);
    xmlhttp.send();
 }
 </script>
</html>  