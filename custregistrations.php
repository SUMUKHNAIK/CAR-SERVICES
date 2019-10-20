<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Dealers information</title>
<link rel="stylesheet" href="style1.css">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="bootstrap.min.js"></script>
<div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
			<a href="#" class="nav-item nav-link">Accept Request</a>
			<a href="#" class="nav-item nav-link">Delete request</a>
			<a href="adminhome.php" class="nav-item nav-link">Back</a>
			
        </div>
    </div>
<style type="text/css">

	a{
        font-size: 25px;
        padding: 10px;
		color: red;
	}
	body {
		background-image: url(dealerimg.jpg);
		height= 50%;
		background-repeat: no-repeat;
		background-size: cover;
		color: black;
		font-size: 20px;
	}
	
</style>
<?php
require 'configure.php';
$result = mysqli_query($conn,"SELECT * FROM Bookings;");

echo "<table border='1'>
<tr>
<th>Booking id</th>
<th>customer id</th>
<th>customer name</th>
<th>contact</th>
<th>address</th>
<th>Service Type</th>
<th>Car Registration number</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Booking_id'] . "</td>";
  echo "<td>" . $row['cust_id'] . "</td>";
  echo "<td>" . $row['cust_name'] . "</td>";
  echo "<td>" .$row['contact'] ."</td>";
  echo "<td>" .$row['address'] ."</td>";
  echo "<td>" .$row['ServiceType'] ."</td>";
  echo "<td>" .$row['car_reg_no'] ."</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($conn);
?>
</head>

<html>