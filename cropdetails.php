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
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $_POST["name"];?> -Details</title>
<style>
body{
	background-image:url("agriculture.jpg");
	background-repeat:no-repeat;
	background-size:100% 100%;
	background-attachment:fixed;
}
#ii{
	background-color:#ccdcec;
	background-image:url("c.jpg");
}

</style>
</head>
<body>
<div class="container-fluid">
<br/>
<nav class="navbar navbar-default">
<div class="container-fluid" id="ii">
<div class="navbar-header">
<a class="navbar-brand" href="hh.php"><span class="glyphicon glyphicon-home"></span>GrowCrops</a>
</div>
<ul class="nav navbar-nav">

<li><a href="blog.php">Blogs</a></li>
<li><a href="queries.php">Queries</a></li>
<li><a href="cropdetails.php">Crop details</a></li>
<li><a href="profile.php">Profile</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="index.php"><span class="glyphicon glyphicon-off"></span>Logout</a></li>
</ul>
</div>
</nav>
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<div class="panel panel-default">
<div class="row"><div class="col-sm-1"></div><div class="col-sm-10">
<?php 
$x=$_POST["name"];
$conn=mysqli_connect("localhost","root","","crops");
$res=$conn->query("select * from $x;");
$row=$res->fetch_assoc();
echo $row["desc"];
echo '<div class="jumbotron">';
echo '<div class="table-responsive">';
echo '<table class="table" border=2 width=100% >';
echo '<tr style="font-size:25px;color:green">';
echo "<td>"."Disease"."</td>";
echo "<td>"."Symptoms/Identification" ."</td>";
echo "<td>"."Stage"."</td>";
echo "<td>"."Image"."</td>";
echo "<td>"."Solution"."</td>";
echo "<td>"."Natural alternative"."</td>";
echo "</tr>";
echo '<tr style="font-size:18px;color:blue">';
echo "<td>".$row["disease"]."</td>";
echo "<td>".$row["symptoms"]."</td>";
echo "<td>".$row["stage"]."</td>";
echo "<td>".'<img src="';echo $row["pest"]; echo '"height=200px width=200px>'."</td>";
echo "<td>".$row["solution"]."</td>";
echo "<td>".$row["naturalsol"]."</td>";
echo "</tr>";
while($row=$res->fetch_assoc())
{
echo '<tr style="font-size:18px;color:blue">';
echo "<td>".$row['disease']."</td>";
echo "<td>".$row["symptoms"]."</td>";
echo "<td>".$row["stage"]."</td>";
echo "<td>".'<img src="';echo $row["pest"]; echo '"height=200px width=200px>'."</td>";
echo "<td>".$row["solution"]."</td>";
echo "<td>".$row["naturalsol"]."</td>";
echo "</tr>";
}
?></table></div></div></div><div class="col-sm-1"></div></div></div></div>
</body>