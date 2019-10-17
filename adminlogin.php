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
	<div class="header">
		<h2>Admin Login</h2>
	</div>
	
    <div class="container" >
        <div class="row">
            <div class="input-group">
                <form action="adminvalidation.php" method="POST">
                    <div class="form-group">
                        <label> username </label>
                        <input type="text" name="admin" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Password </label>
                        <input type="Password" name="password" class="form-control">
                    </div>

                    <button type = "submit" name="signup-submit" class="btn btn-primary"> Login </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>