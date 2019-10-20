<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="bootstrap.min.js"></script>
</head>
<body>
	<style type="text/css">
    a{
        font-size: 25px;
        padding: 10px;
		color: red;
    }
	body {
		background-image: url(customer.jpg);
		height= 50%;
		background-repeat: no-repeat;
		background-size: cover;
		color: white;
		font-size: 15px;
	}
	
</style>
 <?php
                if(isset($_GET['error'])){
                    if($_GET['error']=="emptyfields"){
                        echo '<p style="color:red;">Fill in all fields!</p>';
                    }
                
					else if($_GET["signup"]=="success"){
						echo '<p class="signsuccess">registartion successfull</p>';
					}
				}
            ?>
    <div class="container" >
        <div class="row">
            <div class="col-lg-6">
            <h2>Car service Registration</h2>
			<br></br>
                <form action="servicesreg.php" method="POST">
					
					<div class="form-group">
                        <label> Customer name </label>
                        <input type="text" name="cust_name" class="form-control">
                    </div>
					
					<div class="form-group">
                        <label> Contact  </label>
                        <input type="text" name="contact" class="form-control">
                    </div>
					<div class="form-group">
                        <label> Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>
					
					<div class="form-group">
                        <label> Enter the service required </label>
                        <input type="text" name="ServiceType" class="form-control">
                    </div>
					<div class="form-group">
                        <label> Car registration number </label>
                        <input type="text" name="car_reg_no" class="form-control">
                    </div>
					<button type = "submit" name="signup" class="btn btn-primary"> Register </button
						<p>
							<a href="customerhome.php">Back</a>
						</p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

