<?php
session_start();
?>
<?php
if(isset($_POST['signup'])){
require 'configure.php';
$name=$_POST['name'];
$job=$_POST['job'];
$contact=$_POST['contact'];
$address=$_POST['address'];


if( empty($name) || empty($job) || empty($contact) || empty($address)){
    header("Location:signup.php?error=emptyfields");
    exit();
}
else{

    $sql = "SELECT * FROM customer_signup WHERE user_name=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location:AddDealer.php?error=sqlerror");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt,"s",$name);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        /*if($resultCheck>0){
            header("Location:AddDealer.php?error=usernametaken");
            exit();
        }*/
		//$query="insert into dealers_info (name,job,contact,address) values($name,$job,$contact,$address);";
		//$result=mysqli_query($conn,$query);
        $success_query = "insert into dealers_info(name,job,contact,address) values(?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$success_query)) {
            header("Location:AddDealer.php?error=sqlerror");
            exit();
            }
            else{    
				//$hashedPwd = password_hash($pswd1,PASSWORD_DEFAULT);    
				mysqli_stmt_bind_param($stmt,"ssss",$name,$job,$contact,$address);
				//mysqli_stmt_bind_param($stmt,"sssssi",$name,$email,$pswd1,$pswd2,$address,$contact);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				header("Location:Dealer.php?update=success");
				exit();
            
            }
        }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    }
}
else{
    header("Location:Dealer.php");
    exit();
}


?>