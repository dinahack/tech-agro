<?php
session_start();
if(!isset($_SESSION["uname"]))
{
echo "<script>window.location.href='index.php';</script>";
}
?>
<!doctype html>
<html><head>
</head>
<body>
<?php
$x=$_POST['ublog'];
$conn=mysqli_connect("localhost","root","","crops");
$un=$_SESSION["uname"];
if($x!=''){
$smt=$conn->prepare("insert into blog(u_name,sub) values (?,?)");
$smt->bind_param('ss',$un,$x);
$smt->execute();
}
echo "<script>window.location.href='blog.php';</script>";
?>
</html>