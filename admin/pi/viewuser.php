<?php

include('Configuration.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h2><a href="pi.php">Add User</a></h2>
<div class="container">
<table class="table table-bordered">
<?php
	 $result1 = mysqli_query($conn, " SELECT * FROM personinfo");
	 echo "<table class='table table-striped table-bordered table-hover table-condensed bg-light'><tr><th>ID</th><th> Name</th><th>Mobile_Number</th><th>Alternate_Mobile_Number</th><th>Email</th><th>Date_of_birth</th><th>Gender</th><th>Address</th><th>State</th><th>Pincode</th><th>Whatsapp_number</th><th>Professional/Job</th><th>Aadhar_Number</th><th>Action</th></tr>";
    while ($row = mysqli_fetch_array($result1)) {
		echo "<tr><td><b>".$row['id']."</b></td>";
			echo "<td><b>".$row['name']."</b></td>";
			echo "<td>".$row['mobile']."</td>";
			echo "<td>".$row['amobile']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['dob']."</td>";
			echo "<td>".$row['gender']."</td>";
			echo "<td>".$row['address']."</td>";
			echo "<td>".$row['state']."</td>";
			echo "<td>".$row['pin']."</td>";
			echo "<td>".$row['wapp']."</td>";
			echo "<td>".$row['job']."</td>";
			echo "<td>".$row['ano']."</td>";
			echo "<td><a href='edituser.php?id=$row[id]'>Edit</a> || "; 
			echo "<a href='deleteuser.php?id=$row[id]'>Delete</a></td></tr>"; 
    }
	echo "</table>";
?>
</table>
</div>
</body>
</html>