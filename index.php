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
   .thumbnail
	{
		padding: 1px;
		border-radius: 6px;
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
	a { color: #333; }
	a:visited { color: #333; }
	a:hover { color: #333; }
	 
	 ul.share-buttons
	 {
		list-style: none;
		padding: 0;
	}

	ul.share-buttons li
	{
	display: inline;
	}

ul.share-buttons .sr-only 
{
  position: absolute;
  clip: rect(1px 1px 1px 1px);
  clip: rect(1px, 1px, 1px, 1px);
  padding: 0;
  border: 0;
  height: 1px;
  width: 1px;
  overflow: hidden;
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
	<?php
	function customError($errno, $errstr)
    {
    }
    set_error_handler("customError");
    {
     echo'';
    }
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
  <div class="col-sm-2" id="authorpic" >
  
  </div>
  <div class="col-sm-8">
  <div id="indemo">
  <div id="infoa"></div>
  </div>
   <ul class="pager">
   <li class="previous"> <a onClick="previous()"><b>Previous</b></a></li>
   <ul class="share-buttons">
  <a href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;"><img alt="Share on Facebook" align="left" src="Facebook.png"></a>
 </ul>
   <li class="next"><a onClick="next()"><b>Next</b></a></li>
   </ul>
  </div>
   <div class="col-sm-2">
  </div>
 </div>
 </div>
 <script>
 var myObj;
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
			var shareul=document.createElement("ul");
			shareul.setAttribute("class", "share-buttons");
			var sharea=document.createElement("a");
			sharea.setAttribute("href", "https://www.facebook.com/sharer/sharer.php?u=&t=");
			sharea.setAttribute("title", "Share on Facebook");
			sharea.setAttribute("target", "_blank");
			sharea.setAttribute("onclick", "window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&t=' + encodeURIComponent(document.URL)); return false;");
			var shareimg=document.createElement("img");
			shareimg.setAttribute("alt", "share on facebook");
			shareimg.setAttribute("src", "Facebook.png");
			sharea.appendChild(shareimg);
			shareul.appendChild(sharea);
			var x=myObj[5][i]+" smalls";
			var division1 = document.createElement("div");
			division1.setAttribute("class", "thumbnail");
			division1.setAttribute("id", "x"+i);
			division1.setAttribute("onClick", "info(this.id)");
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
			division1.appendChild(shareul);
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
			var x=myObj[5][i]+" smalls";
			var division1 = document.createElement("div");
			division1.setAttribute("class", "thumbnail");
			division1.setAttribute("id", "x"+i);
			division1.setAttribute("onClick", "info(this.id)");
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
		nlength=plength;
		plength=plength+10;
	}
 }
 function info(id)
	{
		$("#infoa").remove();
		var inn = id.substring(1,(id.length)); 
		var i=inn.valueOf();
		var y=i-1;
		var y1=JSON.stringify(y);
		var y2="x"+y1;
							var element = document.getElementById("indemo");
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
							var nt3 = document.createTextNode(myObj[7][i]);
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
							var d4 = document.createElement("div");
							d4.setAttribute("class", "panel panel-default");
							d4.setAttribute("id", "infoa");
							d4.setAttribute("onClick", "openaccount("+i+")");
							var img = document.createElement("img");
							img.setAttribute("src", myObj[6][i]);
							img.setAttribute("width", "85");
							img.setAttribute("height", "85");
							img.setAttribute("align", "left");
							var d2 = document.createElement("div");
							d2.setAttribute("class", "col-sm-5");
							d2.appendChild(img);
							var d3 = document.createElement("div");
							d3.setAttribute("class", "panel-body ");
							d3.setAttribute("id", i);
							d3.appendChild(d2);
							d3.appendChild(d1);
							d4.appendChild(d3);
							var element1 = document.getElementById(y2);
							element.insertBefore(d4,element1);
	
	}
 function openaccount(id)
 {
	window.location="authoraccount.php?loginid="+myObj[1][id]; 
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
	  graph.textAlign = "right";
	  graph.fillText("-"+myObj[0][id],2680,1600);
	  var download = document.getElementById("download"+id);
        var image = loc.toDataURL("image/png")
                    .replace("image/png", "image/octet-stream");
        download.setAttribute("href", image);
 }
 function stories()
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
		document.getElementById("story1").innerHTML = "stories:" + length1;
    }
  };
    xmlhttp.open("GET", "getstories.php", true);
    xmlhttp.send();
 }
 </script>
</html>  