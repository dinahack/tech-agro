<?php
session_start();
if(!isset($_SESSION["uname"]))
{
	echo "<script>window.location.href='index.php';</script>";
}
if(!isset($_POST["name"]))
	{
		echo "<script>window.location.href='crops.php';</script>";
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
<title><?php echo $_POST["name"];?> -Details</title>
<style>
body{
	background-image:url("agriculture.jpg");
	background-repeat:no-repeat;
	background-size:100% 100%;
	background-attachment:fixed;
}
li{
	font-size:20px;
}
h3{
	color:navy;
}
p{
	color:olive;
	font-size:18px;
	text-indent:15px;
}
#ii{
	background-color:seagreen;
	background-image:url("c.jpg");
}
#desc{
background-color:snow;
	padding:10px;
	margin-left:-10px;
	border-radius:10px;
}
#box{
	background-color:honeydew;
	padding:10px;
	margin-left:-10px;
	border-radius:10px;
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
	<li class="nav-item"><a class="nav-link active" href="crops.php"><span class="glyphicon glyphicon-apple"></span>  Crop details</a></li>
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



<div class="row"><div class="col-sm-1"></div><div class="col-sm-10">
<?php 
$x=$_POST["name"];
$conn=mysqli_connect("localhost","root","","crops");
$res=$conn->query("select * from $x;");
$row=$res->fetch_assoc();
echo '<div class="container" id="desc">';
echo "<h3>Description:</h3>";
echo '<p>'.$row["desc"].'</p>';
echo "</div><br/><br/>";
echo '<div class="container" id="box">';
echo "<h3>"."Disease:"."</h3>";
echo "<p>".$row["disease"]."</p>";
echo "<h3>"."Symptoms/Identification:" ."</h3>";
echo "<p>".$row["symptoms"]."</p>";
echo "<h3>"."Stage:"."</h3>";
echo "<p>".$row["stage"]."</p>";
echo "<h3>"."Image:"."</h3>";
echo "<p>".'<img src="';echo $row["pest"]; echo '" class="img-responsive" height=180px width=300px>'."</p>";
echo "<h3>"."Solution:"."</h3>";
echo "<p>".$row["solution"]."</p>";
echo "<h3>"."Natural alternative:"."</h3>";
echo "<p>".$row["naturalsol"]."</p>";
echo "</div><br/><br/>";
while($row=$res->fetch_assoc())
{
echo '<div class="container" id="box">';
echo "<h3>"."Disease:"."</h3>";
echo "<p>".$row["disease"]."</p>";
echo "<h3>"."Symptoms/Identification:" ."</h3>";
echo "<p>".$row["symptoms"]."</p>";
echo "<h3>"."Stage:"."</h3>";
echo "<p>".$row["stage"]."</p>";
echo "<h3>"."Image:"."</h3>";
echo "<p>".'<img src="';echo $row["pest"]; echo '" class="img-responsive" height=180px width=300p>'."</p>";
echo "<h3>"."Solution:"."</h3>";
echo "<p>".$row["solution"]."</p>";
echo "<h3>"."Natural alternative:"."</h3>";
echo "<p>".$row["naturalsol"]."</p>";
echo "</div><br/><br/>";
}
?></div></div><div class="col-sm-1"></div></div></div>
</body>