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
    <div class="container" >
        <div class="row">
            <div class="col-lg-6">
            <?php
                if(isset($_GET['error'])){
                    if($_GET['error']=="emptyfields"){
                        echo '<p style="color:red;">Id field has to be filled!</p>';
                    }
                
					else if($_GET["update"]=="success"){
						echo '<p class="updatesuccess">Update successfull</p>';
					}
				}
            ?>
                <form action="DealerDeleteValidate.php" method="POST">
					
					<div class="form-group">
                        <label> Enter dealer id to delete his details </label>
                        <input type="text" name="id" class="form-control">
                    </div>
					
					<button type = "submit" name="signup" class="btn btn-primary"> Delete </button
						<p>
							<a href="Dealer.php">Back</a>
						</p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

