<?php

session_start();
require 'configure.php';
if(isset($_POST['signup-submit'])){
	$Name = $_POST['admin'];
	$password = $_POST['password'];
	$q = "select * from admin_login where admin= '$Name' && password = '$password';";
	$result = mysqli_query($conn,$q);
	$num = mysqli_num_rows($result);
	if($num==1){
		$_SESSION['name'] = $Name;
		header('location:adminhome.php');
	}
	else if($num==0){
		echo "User doesnt exist";
		//header('location:adminlogin.php');
	}
}
else{
	header('location:adminlogin.php');
}
?>
