<?php

include('Configuration.php');
include('adminnav.php');


?>

<script>
    function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x)
          return true;
      else
        return false;
    }
	

    function ConfirmEdit()
    {
      var x = confirm("Are you sure you want to Edit?");
      if (x)
          return true;
      else
        return false;
    }
	
	
</script> 



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

	<h2><a href="addcontact.php">Add Contacts</a></h2><style>
	.e1{
		width:100px;
		height:100px;
		border-radius:10px;
	}
	</style>
<div class="table-responsive container-fluid " style=" border:2px solid black;padding:2%;background-color:yellow;">
<?php
	 $result1 = mysqli_query($conn, " SELECT * FROM contact where userid=$session_userid;");
	 echo "<table class='table table-striped table-bordered table-hover table-condensed bg-light' id='tblCustomers'>
	 			<tr><th> ID</th><th>Photo</th><th>Name</th><th>Mobile</th><th>Alternate Mobile</th><th>Email</th><th>DOB</th>
				<th>Gender</th><th>Address</th><th>State</th><th>PinCode</th><th>WhatsApp_No</th><th>Job</th><th>Aadhaar_NO</th><th>Email</th><th>Edit/Delete</th></tr>";

    while ($row = mysqli_fetch_array($result1)) {
		echo "<tr><td><b>".$row['id']."</b></td>";
		echo "<td><img class='e1' src='../../admin/php/images/".$row['image']."' align='left' ></td>";
			echo "<td>".$row['name']."</td>";
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
			echo "<td><a href='sendemail.php?email=$row[email]'  >Send_Email</a></td>";
			echo "<td><a href='editcontact.php?id=$row[id]'  Onclick='return ConfirmEdit();'><i class='fa fa-edit'>&nbsp;</i></a> || "; 
			echo "<a href='deletecontact.php?id=$row[id]' Onclick='return ConfirmDelete();'><i class='fa fa-remove text-danger'>&nbsp;</i></a></td></tr>"; 
    }
	echo "</table>";
?>
</div>
