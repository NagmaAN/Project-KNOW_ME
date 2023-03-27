<?php

include('Configuration.php');

include ('adminnav.php');
?>

<div class="table-responsive" style="width:80%;height:50%; border:2px solid black;margin:10%;padding:2%;">
<?php
	 $result1 = mysqli_query($link, " SELECT * FROM users");
	 echo "<table class='table table-striped table-bordered table-hover table-condensed bg-light'><tr><th> ID</th><th> Name</th><th>Email</th><th>Mobile</th><th>Address</th><th>Gender</th><th>Action</th></tr>";
    while ($row = mysqli_fetch_array($result1)) {
		echo "<tr><td><b>".$row['id']."</b></td>";
			echo "<td><b>".$row['username']."</b></td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['mobile']."</td>";
			echo "<td>".$row['address']."</td>";
			echo "<td>".$row['gender']."</td>";
			echo "<td><a href='edituser.php?id=$row[id]'>Edit</a> || "; 
			echo "<a href='deleteuser.php?id=$row[id]'>Delete</a></td></tr>"; 
    }
	echo "</table>";
?>
</div>
</body>
</html>