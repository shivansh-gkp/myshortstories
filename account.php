<?php
session_start();
?>
<?php
 ob_start();
 if(($_SESSION["key"]!=1))
  {
	$_SESSION["key"]=0;
	header( "Location: signin.php" ); 
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
	hr 
	{
    margin-top: 0px;
    margin-bottom: 8px;
   }
	.panel-default > .panel-heading 
	{
		color: #333;
		background-color: #222;
		border-color: #ddd;
	}
   .jumbotron 
    {
     padding-top: 40px;
     padding-bottom: 0px;
    }
	.thumbnail
	{
		padding: 1.1px;
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
	.l10
	{
	font-size: 30px;	
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
	 color:#777;
	 text-align: center;
	  margin-top: 7px;
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
		color: white;
	}
	.jumbo
	{
	  margin-bottom: 20px;
	}
	a { color: #333; }
	a:visited { color: #333; }
	a:hover { color: #333; }
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
	     <li class="active"><a href="account.php"><span class="glyphicon glyphicon-pencil"></span> STORIES</a></li>
        <li><a href="setting.php"><span class="glyphicon glyphicon-cog"></span> SETTINGS</a></li>
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
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
	</div>
  </div> 
 </nav>
</body>
 <div class="container-fluid" style="max-width:1320px;margin-top:70px;">
 <div class="row">
  <div class="col-sm-2" >
  <div id="propic" class="thumbnail">
      <div id="username" class="caption">
        <h2 class="story" id="story1"></h2>
      </div>
    </div>
  </div>
  <div class="col-sm-7">
  <div class="thumbnail" style="background-color:white">
  <form action="savestory.php" method="post">
    <div class="form-group-margin0">
      <div class="margin5">          
        <textarea class="form-control" type="text" rows="4" name="story" placeholder="Write your story..." maxlength="300" onkeyup="edittext(this.value)" ></textarea>
      </div>
      <div class=" col-sm-13">
        <button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-pencil"></span> Story</button>
		<form>
		<label class="radio-inline">
		<input type="radio" name="optradio" value="wl" checked onclick="edittext(story.value)"> Left
		</label>
		<label class="radio-inline">
		<input type="radio" name="optradio" value="cn" onclick="edittext(story.value)"> Center
		</label>
		<label class="radio-inline">
		<input type="radio" name="optradio" value="wr" onclick="edittext(story.value)"> Right
		</label>
		</form>
      </div>
  </form>
  </div>
  </div>
  <div id="editthis">
  <p id="inner"></p>
  </div>
  <div id="indemo">
  </div>
  <ul class="pager">
  <li class="previous"> <a onClick="previous()"><b>Previous</b></a></li>
  <li class="next"><a onClick="next()"><b>Next</b></a></li>
   </ul>
  </div>
   <div class="col-sm-3">
    <div class="panel panel-default">
    <div class="panel-heading n"><h2 class="cn n">Notification</h2></div>
    <div class="panel-body">:Welcome to myshortstories.com. Here you can be the author of your own short stories</div>
	 <hr> 
	<div class="panel-body">:Here you have a character limit of 300 in which you have to express your self.</div>
    </div>
  </div>
 </div>
 </div>
 <script>
 var myObj;
 var del;
 var storydel;
 var length1;
 var nlength;
 var plength;
 var counter;
 function next()
 {
	if(nlength>0)
	{	  
	 $("#indemo").empty();
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
			var x=myObj[4][i]+" smalls";
			var division1 = document.createElement("div");
			division1.setAttribute("class", "thumbnail");
			var division2 = document.createElement("div");
			var preelement = document.createElement("PRE");
			var a = document.createElement("a");
			var button = document.createElement("button");
			var button1 = document.createElement("button");
			var node1 = document.createTextNode("Delete ");
			var node2 = document.createTextNode("Download ");
			a.setAttribute("download", "image.png");
			a.setAttribute("id", "download"+i);
			button.setAttribute("type", "submit");
			button.setAttribute("class", "btn btn-default ");
			button.setAttribute("id",i);
			button.setAttribute("onClick","deletethis(this.id);");
			button1.setAttribute("type", "submit");
			button1.setAttribute("class", "btn btn-default ");
			button1.setAttribute("id", i);
			button1.setAttribute("onClick","download(this.id);");
			button.appendChild(node1);			
			var span = document.createElement("span");
			span.setAttribute("class", "glyphicon glyphicon-trash");
			var span1 = document.createElement("span");
			span1.setAttribute("class", "glyphicon glyphicon-download-alt");
			button.appendChild(span);
			button1.appendChild(node2);
			button1.appendChild(span1);
			a.appendChild(button1);
			division2.setAttribute("class", "jumbotron");
			division2.setAttribute("style", "background-image: url(myshortstory.jpg); background-size: 100%; margin-bottom: 5px;");
			var para = document.createElement("h2");
			var para1 = document.createElement("h3");
			para.setAttribute("class", x);
			para1.setAttribute("class", "wr smalla");
			var node = document.createTextNode(myObj[0][i]);
			var node1 = document.createTextNode("-"+myObj[3]);
			para.appendChild(node);
			para1.appendChild(node1);
			preelement.appendChild(para);
			preelement.appendChild(para1);
			division2.appendChild(preelement);
			division1.appendChild(division2);
			division1.appendChild(button);
			division1.appendChild(a);
			var element = document.getElementById("indemo");
			element.appendChild(division1);
		}
		plength=nlength;
		nlength=nlength-10;
	}
 }
 function previous()
 {
	if(plength<length1-1)
	{	  
	 $("#indemo").empty();
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
			var x=myObj[4][i]+" smalls";
			var division1 = document.createElement("div");
			division1.setAttribute("class", "thumbnail");
			var division2 = document.createElement("div");
			var preelement = document.createElement("PRE");
			var a = document.createElement("a");
			var button = document.createElement("button");
			var button1 = document.createElement("button");
			var node1 = document.createTextNode("Delete ");
			var node2 = document.createTextNode("Download ");
			a.setAttribute("download", "image.png");
			a.setAttribute("id", "download"+i);
			button.setAttribute("type", "submit");
			button.setAttribute("class", "btn btn-default ");
			button.setAttribute("id",i);
			button.setAttribute("onClick","deletethis(this.id);");
			button1.setAttribute("type", "submit");
			button1.setAttribute("class", "btn btn-default ");
			button1.setAttribute("id", i);
			button1.setAttribute("onClick","download(this.id);");
			button.appendChild(node1);			
			var span = document.createElement("span");
			span.setAttribute("class", "glyphicon glyphicon-trash");
			var span1 = document.createElement("span");
			span1.setAttribute("class", "glyphicon glyphicon-download-alt");
			button.appendChild(span);
			button1.appendChild(node2);
			button1.appendChild(span1);
			a.appendChild(button1);
			division2.setAttribute("class", "jumbotron");
			division2.setAttribute("style", "background-image: url(myshortstory.jpg); background-size: 100%; margin-bottom: 5px;");
			var para = document.createElement("h2");
			var para1 = document.createElement("h3");
			para.setAttribute("class", x);
			para1.setAttribute("class", "wr smalla");
			var node = document.createTextNode(myObj[0][i]);
			var node1 = document.createTextNode("-"+myObj[3]);
			para.appendChild(node);
			para1.appendChild(node1);
			preelement.appendChild(para);
			preelement.appendChild(para1);
			division2.appendChild(preelement);
			division1.appendChild(division2);
			division1.appendChild(button);
			division1.appendChild(a);
			var element = document.getElementById("indemo");
			element.appendChild(division1);
		}
		nlength=plength;
		plength=plength+10;
	}
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
	var text = myObj[0][id];
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
     if(myObj[4][id]=='cn')
	 {
		 graph.textAlign = "center";
		 graph.fillText(eachLine[i],1440,startline+x);
	 }
	 if(myObj[4][id]=='wl')
	 {
		 graph.textAlign = "left";
		 graph.fillText(eachLine[i],300,startline+x);
	 }
	 if(myObj[4][id]=='wr')
	 {
		 graph.textAlign = "right";
		 graph.fillText(eachLine[i],2580,startline+x);
	 }
	 x=x+120;
	}
	  graph.font="90px Flamenco";
	 graph.textAlign = "right";
	  graph.fillText("-"+myObj[3],2680,1600);
	  var download = document.getElementById("download"+id);
        var image = loc.toDataURL("image/png")
                    .replace("image/png", "image/octet-stream");
        download.setAttribute("href", image);
 }
 function edittext(str)
 {
   if (str.length == 0) 
   { 
    $("#editthis").empty();
   }
   if (str.length != 0) 
   {
	   var x;
	   $("#editthis").empty();
	   var alignment = $('input[name=optradio]:checked').val();
	   x=alignment+" smalls";
	   var division1 = document.createElement("div");
	   division1.setAttribute("class", "thumbnail");
	   var preelement = document.createElement("PRE");
	   var division2 = document.createElement("div");
	   division2.setAttribute("class", "jumbotron ");
	   division2.setAttribute("style", "background-image: url(myshortstory.jpg); background-size: 100%; margin-bottom: 5px;");
	   var node = document.createTextNode(str);
	   var para = document.createElement("h2");
	   para.setAttribute("class", x);
	   para.appendChild(node);
	   preelement.appendChild(para);
	   division2.appendChild(preelement);
	   division1.appendChild(division2);
	   var element = document.getElementById("editthis");
	   element.appendChild(division1);
	   
   }
  }
 function stories()
 {
  var xmlhttp = new XMLHttpRequest();
  var i;
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
        nlength=length1;
		plength=length1;
		next();
		pic(myObj[5], length1);
    }
  };
    xmlhttp.open("GET", "allstories.php", true);
    xmlhttp.send();
 }
 function pic(str, len)
	{
        $("#pic").remove();
		$("#username").empty();
		var profilepicture = document.createElement("IMG");
		profilepicture.setAttribute("src", str);
		profilepicture.setAttribute("class", "img-responsive");
		profilepicture.setAttribute("alt", "Cinque Terre");
		profilepicture.setAttribute("id", "pic");
		profilepicture.setAttribute("width", "245");
		profilepicture.setAttribute("height", "245");
		var setpic = document.getElementById("propic");
		var name1 = document.getElementById("username");
		setpic.insertBefore(profilepicture, name1);
		if(myObj[3].length>11)
		{
		
			var h3 = document.createElement("h3");
			var node1 = document.createTextNode(myObj[3]);
			var h2 = document.createElement("h3");
			var node2 = document.createTextNode("stories: "+len);
			h2.appendChild(node2);
			h3.appendChild(node1);
			var name1 = document.getElementById("username");
			var hr1 = document.createElement("hr");
		    name1.appendChild(h3);
			name1.appendChild(hr1);
			name1.appendChild(h2);
		}
		else
		{
			var h2 = document.createElement("h2");
			var node1 = document.createTextNode(myObj[3]);
			var hl = document.createElement("h3");
			var node2 = document.createTextNode("stories: "+len);
			hl.appendChild(node2);
			h2.appendChild(node1);
			var name1 = document.getElementById("username");
			var hr1 = document.createElement("hr");
		    name1.appendChild(h2);
			name1.appendChild(hr1);
			name1.appendChild(hl);
		}
	}
 function deletethis(id)
            {
				 del={"story":myObj[0][id],"dates":myObj[1][id],"times":myObj[2][id]};
				 storydel=JSON.stringify(del);
                 var xmlhttp = new XMLHttpRequest();
				 xmlhttp.open("GET", "delete.php?todelete="+storydel, true);
				 xmlhttp.send();
				 $("#indemo").empty();
				 stories();
            }
 </script>
</html>