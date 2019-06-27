<?php
session_start();
if(!isset($_SESSION["uname"]))
{
echo "<script>window.location.href='index.php'; </script>";
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Blog-GrowCrops</title>
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
<style>
li{
	font-size:18px;
}
div.header{
font-size:200%;
color:green;
text-align:center;
padding:0px;
margin:0px;
}
h3{
	color:blue;
}
div.asign
{
font-size:150%;
color:red;
text-align:left;
padding:25px;
margin:50px;
}
div.jumbotron{
	text-align:left;
}
div.container{
	padding:0px;
}
body{
	background-image:url("agriculture.jpg");
	background-size:100% 100%;
	background-repeat:no-repeat;
	background-attachment:fixed;
}
#ii{
	background-image:url("m.jpg");
	background-color:seagreen;
}

</style>
</head>
<body><div class="container-fluid"><br/>
<nav class="navbar navbar-expand-md navbar-dark navbar-fixed-top" id="ii">
   <a class="navbar-brand" href="hh.php"><span class="glyphicon glyphicon-home"></span>   GrowCrops</a>
   <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#new"><span class="navbar-toggler-icon"></span></button>
   <div class="collapse navbar-collapse" id="new">
    <ul class="nav navbar-nav">
	<li class="nav-item"><a class="nav-link active" href="#"><span class="glyphicon glyphicon-globe"></span>   Blogs</a></li>
	<li class="nav-item"><a class="nav-link" href="queries.php"><span class="glyphicon glyphicon-question-sign"></span>   Queries</a></li>
	<li class="nav-item"><a class="nav-link" href="crops.php"><span class="glyphicon glyphicon-apple"></span>  Crop details</a></li>
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

<div class="header">
<div class="panel panel-default"><div class="row"><div class="col-sm-1"></div><div class="col-sm-10">
<h4 style="color:red;">WELCOME TO USER BLOGS</h4>
<p style="color:black;font-size:20px;">Read and share things related to agriculture</p>
<div class="jumbotron">
<?php
$conn=mysqli_connect("localhost","root","","crops");
$row='';
$result=$conn->query("select * from blog;");
while( $row=$result->fetch_assoc())
{
	echo "<h3>" . $row["u_name"] .":" .'<scope style="font-size:18px;color:orange">'."(at   ".date("d/m/Y h:i A",strtotime($row["time"])+(5*60*60)+(30*60)).")".'</scope>'. "</h3>";
	//echo $row["time"];
	echo "<p style='font-size:18px'>" . $row["sub"] . "<p><hr/>";
}

?></div>
</br>

<form action="blog_ins.php" method="post">
<div class="row"><div class="col-sm-4"></div>
<div class="col-sm-4">
<div class="form-horizontal">
<div class="input-group">
<span class="input-group-addon">
<i class="glyphicon glyphicon-share"></i></span>
<input type="text" name="ublog" class="form-control" placeholder="share your own ideas" required></input></div></div>
</div><div class="col-sm-4"></div></div>
<button type="submit" class="btn btn-success">Post</button>
</form>
<br/></div></div><div class="col-sm-1"></div></div>
</div>
</body>
</html>