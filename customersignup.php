<?php

//session_start();
if(isset($_POST['signup'])){

require 'configure.php';
$errors = array();

$name = $_POST['user_name'];
$email = $_POST['email'];
$pswd1= $_POST['password1'];
$pswd2= $_POST['password2'];
$address = $_POST['address'];
$contact = $_POST['contact'];




if( empty($name) || empty($email) || empty($pswd1) || empty($pswd2) || empty($address) || empty($contact)){
    header("Location:signup.php?error=emptyfields");
    exit();
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$name)){
    header("Location:signup.php?error=invalidemailandname");
    exit();
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    header("Location:signup.php?error=invalidemail");
    exit();
}
else if(!preg_match("/^[a-zA-Z0-9]*$/",$name)){
    header("Location:signup.php?error=invalidusername");
    exit();
}
else if ($pswd1 != $pswd2) {
	array_push($errors, "The two passwords do not match");
  }
else{

    $sql = "SELECT * FROM customer_signup WHERE user_name=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location:signup.php?error=sqlerror");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt,"s",$name);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if($resultCheck>0){
            header("Location:signup.php?error=usernametaken");
            exit();
        }
        else{
            $success_query = "insert into customer_signup(user_name,email,password1,password2,address,contact) values(?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$success_query)) {
            header("Location:signup.php?error=sqlerror");
            exit();
            }
            else{    
				//$hashedPwd = password_hash($pswd1,PASSWORD_DEFAULT);    
				mysqli_stmt_bind_param($stmt,"sssssi",$name,$email,$pswd1,$pswd2,$address,$contact);
				//mysqli_stmt_bind_param($stmt,"sssssi",$name,$email,$pswd1,$pswd2,$address,$contact);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				header("Location:home.php?signup=success");
				exit();
            
            }
        }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    }
}
}
else{
    header("Location:signup.php");
    exit();
}















//    $q = "select * from Customer where userName= '$userName' ";
//$result = mysqli_query($con,$q);
//$num = mysqli_num_rows($result);

//if($num==1){
//    echo "Duplicate data";
//    //echo "<script> alert('Duplicate data');</script>;
//}
//else{
//    $success_query = "insert into Customer(cust_name,userName,contactInfo,address,password,email) values('$name','$userName','$contact','$address','$password','$email')";
//    mysqli_query($con,$success_query);
//   header('location:customerLogin.php');
//}

?>
