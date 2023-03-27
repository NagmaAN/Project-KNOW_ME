<?php
// include database connection file
include_once("Configuration.php");
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if($conn)
{
  $id =  $_GET['id'];
  $result1 = mysqli_query($conn, " SELECT * FROM contact where id =$id;");
  $row = mysqli_fetch_array($result1);
  
    
}
 echo "<td><a href='deletedr.php?id=$row[doctorid]' Onclick='return ConfirmDelete();'>Delete</a></td></tr>";


// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM contact WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:viewcontacts.php");
?>

