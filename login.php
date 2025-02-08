<?php
include 'onlinegamedb.php';
$user=$_POST['username'];
echo"<script>alert($user)</script>";
$pass=$_POST['password'];
$sql="select user,password from login where user='$user' and password='$pass'";
$result=mysqli_query($connection,$sql);
$resultquery=mysqli_num_rows($result);
echo"<br>";

if($resultquery>0)
{
	header('location:home.html');
}
else
{
echo"<script>alert('user not found')</script>";
	header("refresh:0,url='login.html'");

}

?>