<!DOCTYPE html>
<html lang="en">
<head>
  <title>PersonInfo DB</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
include("Configuration.php");

?>

<div class="table-responsive" style="width:80%;height:50%; border:2px solid black;margin:10%;padding:2%;">
<?php
     $result1 = mysqli_query($conn, " SELECT * FROM personinfo");
     echo "<table class='table table-striped table-bordered table-hover table-condensed bg-light'>
      <tr><th>Name</th><th>Mobile Number</th><th>Alternate Mobile Number</th><th>Email</th><th>Date Of Birth</th><th>Gender</th><th>Address</th><th>State</th><th>Pincode</th><th>Whatsapp Number</th><th>Job/Professional</th><th>Adhaar Number</th></tr>";
    while ($row = mysqli_fetch_array($result1)) {
        echo "<tr><td><b>".$row['name']."</b></td>";
            echo "<td><b>".$row['mobile']."</b></td>";
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
</body>
</html>
