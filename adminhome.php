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


        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="home.php" class="nav-item nav-link active">Home</a>
                <a href="adminlogin.php" class="nav-item nav-link">Admin</a>
                <a href="#" class="nav-item nav-link">About</a>
                <a href="#" class="nav-item nav-link">Contact</a>
				<a href="#" class="nav-item nav-link">Feedback</a>
            </div>
        </div>
    </div>  
<style type="text/css">
    a{
        font-size: 25px;
        padding: 10px;
		color: red;
    }
    #welcome{
        font-size: 30px;
        color: blue;
    }
    Customer login{
        font-size: 20px;
        color: red;
    }
	body {
		background-image: url(images.jpg);
		height= 50%;
		background-repeat: no-repeat;
		background-size: cover;
		color: black;
		font-size: 20px;
	}
	
</style>
	<body>
    <p id='welcome'><marquee behavior="scroll" direction="left">Welcome to Car services Portal!</marquee></p>
    <br><br>
<form action="customer_validation.php" method="POST">
	<div class="container" >
        <div class="row">
            <div class="col-lg-6">
			<h2>Customer login</h2>
			<div class="container" >
        <div class="row">
            <div class="input-group">
                <form action="customer_validation.php" method="POST">
                    <div class="form-group">
                        <label> username </label>
                        <input type="text" name="user_name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Password </label>
                        <input type="Password" name="password1" class="form-control">
                    </div>

                    <button type = "submit" name="signup" class="btn btn-primary"> Login </button>
                </form>
			<b>Not yet a member?</b> <a href="signup.php">Sign up</a>
			</p>
</form>
			</div>
		</div>
	</div>

</body>
</html>	
