<!DOCTYPE html>
<html>
<head>
<title>Dealers information</title>
<meta content="noindex, nofollow" name="robots">
<link href="style1.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Dealers information</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
require 'configure.php';
//MySQL Query to read data
$q1="select * from dealers_info;";
$query = mysqli_query($q1,$conn);
while ($row = mysqli_fetch_assoc($query)) {
	echo "<b><a href="dealers.php? id={$row['id']}" > {$row['name']} </a></b>";
	echo "<br />";
}
?>
</div>
<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];
$q="select * from dealers_info where id=$id";
$query1 = mysqli_query($q,$conn);
while ($row1 = mysqli_fetch_array($query1)) {
?>
<div class="form">
<h2>---Details---</h2>
<!-- Displaying Data Read From Database -->
<span>Name:</span> <?php echo $row1['name']; ?>
<span>Job:</span> <?php echo $row1['job']; ?>
<span>Contact No:</span> <?php echo $row1['contact']; ?>
<span>Address:</span> <?php echo $row1['address']; ?>
</div>
<?php
}
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
<?php
mysqli_close($conn); // Closing Connection with Server
?>
</body>
</html>