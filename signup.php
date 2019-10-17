<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>CAR SERVICES</title>
<link rel="stylesheet" href="bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="bootstrap.min.js"></script>
</head>
<body>
    <div class="container" >
        <div class="row">
            <div class="col-lg-6">
            <h2>Customer Sign up</h2>
            <?php
                if(isset($_GET['error'])){
                    if($_GET['error']=="emptyfields"){
                        echo '<p style="color:red;">Fill in all fields!</p>';
                    }
                    else if($_GET['error']=="invalidemailandname"){
                        echo '<p style="color:red;">Invalid mail and name</p>';    
                    }
                    else if($_GET['error']=="invalidemail"){
                        echo '<p style="color:red;">Invalid Email</p>';    
                    }
                    else if($_GET['error']=="invalidusername"){
                        echo '<p style="color:red;">Invalid UserName</p>';    
                    }
                    else if($_GET['error']=="usernametaken"){
                        echo '<p style="color:red;">UserName Taken</p>';    
                    }
                
					else if($_GET["signup"]=="success"){
						echo '<p class="signupsuccess">Sign up successfull</p>';
					}
				}
            ?>
                <form action="customersignup.php" method="POST">
					<div class="form-group">
                        <label> username </label>
                        <input type="text" name="user_name" class="form-control">
                    </div>
					<div class="form-group">
                        <label> Email </label>
                        <input type="text" name="email" class="form-control">
                    </div>
					
					<div class="form-group">
                        <label> Enter Password </label>
                        <input type="Password" name="password1" class="form-control">
                    </div>
					<div class="form-group">
                        <label> Re enter Password </label>
                        <input type="Password" name="password2" class="form-control">
                    </div>
					
					<div class="form-group">
                        <label> Contact-Info </label>
                        <input type="text" name="contact" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Address </label>
                        <input type="text" name="address" class="form-control">
                    </div>


                    <button type = "submit" name="signup" class="btn btn-primary"> Sign Up </button
						<p>
							Already registered!? <a href="home.php">login</a>
						</p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
