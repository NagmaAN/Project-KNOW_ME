<?php

include('Configuration.php');
include('adminnav.php');
//include('session.php');


?>
<style>
	.e1{
		width:100px;
		height:100px;
		border-radius:10px;
	}
	</style>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<h2><a href="adduser.php">Add User</a></h2><style>
	.e1{
		width:150px;
		height:150px;
		border-radius:10px;
		background:red;
	}
	</style>
<div class="table-responsive container-fluid " style=" border:2px solid black;padding:2%;">
<?php

	 $result1 = mysqli_query($conn, " SELECT * FROM users ");
	 echo "<table class='table table-striped table-bordered table-hover table-condensed bg-light' id='tblCustomers'>
	 			<tr><th> ID</th><th>Photo</th><th>Name</th><th>Email</th><th> Mobile</th><th>Address</th><th>DOB</th>
				<th>Gender</th><th>Edit/Delete</th></tr>";

    while ($row = mysqli_fetch_array($result1)) {
		echo "<tr><td><b>".$row['id']."</b></td>";
		echo "<td><img class='e1' src='images/".$row['image']."' align='left' ></td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['mobile']."</td>";
		
			echo "<td>".$row['address']."</td>"; 
			echo "<td>".$row['dob']."</td>";
			
			echo "<td>".$row['gender']."</td>";
			
			
			
			echo "<td><a href='edituser.php?id=$row[id]'><i class='fa fa-edit'>&nbsp;</i></a> || "; 
			echo "<a href='deleteuser.php?id=$row[id]'><i class='fa fa-remove text-danger'>&nbsp;</i></a></td></tr>"; 
    }
	echo "</table>";
?>
</div>
