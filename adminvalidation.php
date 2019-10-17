<?php
session_start();
require 'configure.php';
if(isset($_POST['signup-submit'])){
	$Name = $_POST['admin'];
	$password = $_POST['password'];
	$query = "select * from admin_login where admin= '$Name' && password = '$password';";
	$result = mysqli_query($conn,$query);
	$num = mysqli_num_rows($result);
	if($num!=0){
		while($row = mysqli_fetch_assoc($result))
		{
			$dbusername=$row['admin'];
			$dbpassword=$row['password'];
		}
		if($Name == $dbusername && $password == $dbpassword)
		{
			session_start();
			$_SESSION['sess_user']=$Name;
			//Redirect Browser
			header("Location:adminhome.php");
		}
	}
	else{
		echo "User doesnt exist";
		header('location:adminlogin.php');
	}
}

else{
	echo "User doesnt exist";
	header('location:adminlogin.php');
}
?>
