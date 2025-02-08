<?php
include'onlinegamedb.php';
if(isset($_POST['register']))
{
	$user=$_POST['username'];
		$pass=$_POST['password'];
			$email=$_POST['email'];
				$contact=$_POST['contact'];
					$pin=$_POST['pin'];
						$address=$_POST['address'];
							$gender=$_POST['gender'];
								$city=$_POST['city'];
									$bd=$_POST['bd'];
									$state=$_POST['state'];

$sql="insert into login values('$user','$pass','$email','$bd','$gender','$contact','$pin','$address','$city','$state')";
$result=mysqli_query($connection,$sql);
if($result)
{
echo"<script>alert('Registered successfully')</script>";
header('refresh:0,url=login.html');
	
}
else
{
echo"failed to register".mysqli_error($connection);
}
}
?>