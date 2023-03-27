<?php
// include database connection file
include_once("Configuration.php");

// Get id from URL to delete that user
$id = $_GET['name'];

// Delete user row from table based on given id
$result = mysqli_query($link, "DELETE FROM personinfo WHERE name=$name");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:displaydb.php");
?>

