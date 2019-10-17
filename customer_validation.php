<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection successful";
}else{
    echo "Failed to connect";
}

mysqli_select_db($con,'carservices');

$Name = $_POST['user_name'];
$password = $_POST['password'];
$hashpwd= password_hash($password,PASSWORD_DEFAULT);
if(password_verify($password,$hashpwd)
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
