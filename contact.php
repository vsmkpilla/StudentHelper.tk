<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>StudenHelper | Contact</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<style>
a:hover{
      text-decoration: none;
    }
a:visited{
text-decoration:none;
}
a img{
 display:none;
 }
#credits {
	background:	#F2F4F4 ;
	padding:20px;
	text-align:center;
	color:#ccc;
}


	</style>
</head>

<body>
<div class="navbar navbar-default navbar-static-top">
<div class="container">
<div class="navbar-header">
<button class="navbar-toggle"  data-toggle="collapse" data-target="#colapid">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="index.html" ><h4 class="navbar-brand"><img src="" /><div class="text text-primary"><strong><span class="glyphicon glyphicon-star-empty"></span>STUDENTHELPER.TK</strong></div></h4></a> 
</div>
<div class="navbar-collapse collapse" id="colapid">
<ul class="nav navbar-nav">
   <li class=""><a data-toggle="collapse"  href="#mainmenu1"><h4 class="text text-info"><span class="glyphicon glyphicon-book"></span>Syllubus Books</h4></a></li>
   <li class=""><a href="#mainmenu2" data-toggle="collapse"><h4 class="text text-info"><span class="glyphicon glyphicon-check"></span>Reference E-Books</h4></a></li>
   <li class=""><a href="#mainmenu3" data-toggle="collapse"><h4 class="text text-info"><span class="glyphicon glyphicon-pencil"></span>Handout Materials</h4></a></li>
   </ul>
   <ul class="nav navbar-nav navbar-right">
   <li><a class="btn navbar-btn btn-info"  href="cont.html"><span class="glyphicon glyphicon-envelope"></span>Contact</a></li>
   </ul>
   </div> 
   </div>  
</div>
<div class="container">
<div class="row">
<div class="col-md-4"><!--main Tree View open-->
<h1><a class="" data-toggle="collapse"  href="#mainmenu1"><span class="glyphicon glyphicon-book"></span>Syllubus Books</a></h1><hr />
<div class="collapse" id="mainmenu1"><!--mainmenu1(syllubus books) open-->
<ul>
<li><h2><a class="" data-toggle="collapse"  href="#menu1">1<sup>st</sup>Year</a></h2><hr />
<div class="collapse " id="menu1">
  <ul type="square" class="">
  <li><a href="1-1page.html" ><h3>1-1</h3></a></li>
  <li><a href="1-2page.html"><h3>1-2</h3></a></li>
  </ul>
</div></li>
<li><h2><a class="" data-toggle="collapse"  href="#menu2">2<sup>nd</sup>Year</a></h2><hr />
<div class="collapse" id="menu2">
  <ul type="square" class="">
  <li><a  href="2-1page.html" ><h3>2-1</h3></a></li>
  <li><a  href="2-2page.html" ><h3>2-2</h3></a></li>
  </ul>
</div></li>
<li><h2><a class="" data-toggle="collapse"  href="#menu3">3<sup>rd</sup>Year</a></h2><hr />
<div class="collapse " id="menu3">
  <ul type="square" class="">
  <li><a  href="3-1page.html" ><h3>3-1</h3></a></li>
  <li><a  href="3-2page.html" ><h3>3-2</h3></a></li>
  </ul>
</div></li>
<li><h2><a class="" data-toggle="collapse"  href="#menu4">4<sup>th</sup>Year</a></h2><hr />
<div class="collapse " id="menu4">
  <ul type="square" class="">
  <li><a  href="4-1page.html" ><h3>4-1</h3></a></li>
  <li><a  href="4-2page.html" ><h3>4-2</h3></a></li>
  </ul>
</div></li>
</ul>
</div><!--Mainmenu1(syllubusbooks) close-->
<h1><a class="" data-toggle="collapse"  href="#mainmenu2"><span class="glyphicon glyphicon-check"></span>Reference E-books</a></h1><hr />
<div class="collapse" id="mainmenu2"><!--mainmenu2(referencebooks) open-->
<ul type="square">
<li><h2><a class=""  href="refbooks.html">Check Here</a></h2
></ul>
</div><!--Mainmenu2(referencebooks) close-->
<h1><a class="" data-toggle="collapse"  href="#mainmenu3"><span class="glyphicon glyphicon-pencil"></span>Handout Materials</a></h1><hr />
<div class="collapse" id="mainmenu3"><!--mainmenu3(Handout Material) open-->
<ul type="square">
<li><h2><a class=""  href="handbooks.html">Check Here</a></h2
></ul>
</div><!--Mainmenu3(handout material) close-->
<h1><a class="" href="cont.html"><span class="glyphicon glyphicon-envelope"></span>Contact</a></h1><hr />
</div>
<div class="col-md-8">
<?php
$server ="localhost";
$uname = "id2988443_mani";
$pass="mani6264";
$dbname ="id2988443_studenthelper";
$con =new mysqli($server,$uname,$pass,$dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
$fname = $_POST['name'];
$femail = $_POST['email'];
$fclgname = $_POST['clgname'];
$fdescr = $_POST['descr'];
$sql = "INSERT INTO contact(Name,Email,ClgName,Descr) VALUES ('$fname','$femail','$fclgname','$fdescr')";

if($con->query($sql)===TRUE){
	echo'<h1 class="text text-success text-center">Thank You For Contacting Us</h1>';
}

$con->close();
?>
</div>
</div>
<br />
<div class="container-fluid">
<div class="row">
<footer>
  <div  id="credits">
  <h4 class="text-center"><b><a href="#">Desclimer</a><span class="text-info"> | </span><a href="#">About Us</a> 
 <span class="text-info"> |</span><a href="#">Contact Us</a></b></h4>
  <h5 class="text-info"><i>copyright&nbsp;<span class="glyphicon glyphicon-copyright-mark"></span>&nbsp;2017-studenthelper.tk<sup>@VSMK</sup> <span class="glyphicon glyphicon-asterisk"></span>ALL RIGHTS RESERVED </i></h5>
  </div>
</footer>
</div>
</div>
</body>
</html>