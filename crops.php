<?php
session_start();
if(!isset($_SESSION["uname"]))
{
	echo "<script>window.location.href='index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Crop Details</title>
<style>
li{
	font-size:18px;
}
div.jumbotron{
	padding:5px;
}
body{
	background-image:url("agriculture.jpg");
	background-repeat:no-repeat;
	background-size:100% 100%;
	background-attachment:fixed;
}
#ii{
	background-color:seagreen;
	background-image:url("c.jpg");
}
</style>
</head>
<body>
<div class="container-fluid">
<br/>
<nav class="navbar navbar-expand-md navbar-dark navbar-fixed-top" id="ii">
   <a class="navbar-brand" href="hh.php"><span class="glyphicon glyphicon-home"></span>   GrowCrops</a>
   <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#new"><span class="navbar-toggler-icon"></span></button>
   <div class="collapse navbar-collapse" id="new">
    <ul class="nav navbar-nav">
	<li class="nav-item"><a class="nav-link" href="blog.php"><span class="glyphicon glyphicon-globe"></span>   Blogs</a></li>
	<li class="nav-item"><a class="nav-link" href="queries.php"><span class="glyphicon glyphicon-question-sign"></span>   Queries</a></li>
	<li class="nav-item"><a class="nav-link active" href="#"><span class="glyphicon glyphicon-apple"></span>  Crop details</a></li>
	<li class="nav-item"><a class="nav-link" href="profile.php"><span class="glyphicon glyphicon-user"></span>  Profile</a></li>
	<li class="nav-item"><a class="nav-link" href="update1_prod.php"><span class="glyphicon glyphicon-shopping-cart"></span>  Products</a></li>
	<li class="nav-item"><a class="nav-link" href="index.php"><div class="glyphicon glyphicon-off"></div>  Logout</a></li>
</ul>
   </div>
</nav><br/><br/>

<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<div class="panel panel-default">
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-10"><br/>
<h2 style="color:orange;font-family:cursive;text-align:center;font-size:25px">Select the crop to get the information about it!</h2>
<br/>
<div class="row">
<div class="col-sm-3"><div class="jumbotron"><br/><img src="paddy.jpg" class="img-fluid" style="width:100%;height:100px" /><br/><br/><form action="details.php" align="center" method="post"><input type="text" name="name" value="paddy" hidden><button class="btn btn-success" type="submit">Paddy </button></form></div></div>
<div class="col-sm-3"><div class="jumbotron"><br/><img src="maize.jpg" class="img-fluid" style="width:100%;height:100px" /><br/><br/><form action="details.php" align="center" method="post"><input type="text" name="name" value="maize" hidden><button class="btn btn-success" type="submit">Maize </button></form></div></div>
<div class="col-sm-3"><div class="jumbotron"><br/><img src="onion.jpg" class="img-fluid" style="width:100%;height:100px" /><br/><br/><form action="details.php" align="center" method="post"><input type="text" name="name" value="onion" hidden><button class="btn btn-success" type="submit">Onion </button></form></div></div>
<div class="col-sm-3"><div class="jumbotron"><br/><img src="cotton.jpg" class="img-fluid" style="width:100%;height:100px" /><br/><br/><form action="details.php" align="center" method="post"><input type="text" name="name" value="cotton" hidden><button class="btn btn-success" type="submit">Cotton </button></form></div></div>
</div>
<div class="row">
<div class="col-sm-3"><div class="jumbotron"><br/><img src="tomato.jpg" class="img-fluid" style="width:100%;height:100px" /><br/><br/><form action="details.php" align="center" method="post"><input type="text" name="name" value="tomato" hidden><button class="btn btn-success" type="submit">Tomato </button></form></div></div>
<div class="col-sm-3"><div class="jumbotron"><br/><img src="brinjal1.jpg" class="img-fluid" style="width:100%;height:100px" /><br/><br/><form action="details.php" align="center" method="post"><input type="text" name="name" value="brinjal" hidden><button class="btn btn-success" type="submit">Brinjal </button></form></div></div>
<div class="col-sm-3"><div class="jumbotron"><br/><img src="ladysfinger.jpg" class="img-fluid" style="width:100%;height:100px" /><br/><br/><form action="details.php" align="center" method="post"><input type="text" name="name" value="ladysfinger" hidden><button class="btn btn-success" type="submit">Ladies Finger </button></form></div></div>
<div class="col-sm-3"><div class="jumbotron"><br/><img src="turmeric.jpg" class="img-fluid" style="width:100%;height:100px" /><br/><br/><form action="details.php" align="center" method="post"><input type="text" name="name" value="turmeric" hidden><button class="btn btn-success" type="submit">Turmeric </button></form></div></div>
</div>
<div class="row">
<div class="col-sm-3"><div class="jumbotron"><br/><img src="groundnut.jpg" class="img-fluid" style="width:100%;height:100px" /><br/><br/><form action="details.php" align="center" method="post"><input type="text" name="name" value="groundnut" hidden><button class="btn btn-success" type="submit">Groundnut </button></form></div></div>
<div class="col-sm-3"><div class="jumbotron"><br/><img src="chilli.jpg" class="img-fluid" style="width:100%;height:100px" /><br/><br/><form action="details.php" align="center" method="post"><input type="text" name="name" value="chilli" hidden><button class="btn btn-success" type="submit">Chili </button></form></div></div>
<div class="col-sm-3"><div class="jumbotron"><br/><img src="bitterguard.jpg" class="img-fluid" style="width:100%;height:100px" /><br/><br/><form action="details.php" align="center" method="post"><input type="text" name="name" value="bitterguard" hidden><button class="btn btn-success" type="submit">Bitter Gourd </button></form></div></div>
<div class="col-sm-3"><div class="jumbotron"><br/><img src="banana.jpg" class="img-fluid" style="width:100%;height:100px" /><br/><br/><form action="details.php" align="center" method="post"><input type="text" name="name" value="banana" hidden><button class="btn btn-success" type="submit">Banana </button></form></div></div>
</div
</div><div class="col-sm-1"></div></div>

</div>
</div>
</body>
</html>

