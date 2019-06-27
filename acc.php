<?php
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$pass=$_POST['pass'];
$place=$_POST['di'];
$mobile=$_POST['mobile'];
$land=$_POST['land'];
$uname=$_POST['uname'];
if($uname==''||$pass==''){echo"";}
$con=mysqli_connect("localhost","root","","crops");
$smt=$con->prepare("insert into login(u_name,u_pass,u_mobile,u_land,email,u_place) values(?,?,?,?,?,?)");
$smt->bind_param('ssssss',$uname,$pass,$mobile,$land,$email,$place);
$smt->execute();
echo '<script>window.alert("Account created successfully!   Login to continue!");</script>';
echo "<script>window.location.href='index.php';</script>";