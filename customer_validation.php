<?php
session_start();
require 'configure.php';
if(isset($_POST['signup'])){
	$Name = $_POST['user_name'];
	$password = $_POST['password1'];
	
	$query = "select * from customer_signup where user_name= '$Name' && password1 = '$password';";
	$result = mysqli_query($conn,$query);
	$num = mysqli_num_rows($result);
	if($num!=0){
		while($row = mysqli_fetch_assoc($result))
		{
			$dbusername=$row['user_name'];
			$dbpassword=$row['password1'];
		}
		if($Name == $dbusername && $password == $dbpassword)
		{
			session_start();
			$id = "select cust_id from customer_signup where user_name=$Name;";
			$_SESSION['sess_user']=$Name;
			//Redirect Browser
			header("Location:customerhome.php");
		}
	}
	else{
		echo "User doesnt exist";
		header('location:home.php');
	}
}
else{
	header('location:home.php');
}
?>

/*
session_start();
require 'configure.php';

$Name = $_POST['user_name'];
$password = $_POST['password'];
$q = "select * from customer_signup where user_name= '$Name' && password1 = '$password';";
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
else{
	header('location:adminlogin.php');
}*/

/*
{
	$q = "select * from customer_signup where user_name= '$Name';";
	$result = mysqli_query($con,$q);
	$num = mysqli_num_rows($result);
	if($num==1){
		$_SESSION['user_name'] = $Name;
		header('location:signup.php');	
	}
}
else{
	echo "Invalid Password";
}
?>
*/
