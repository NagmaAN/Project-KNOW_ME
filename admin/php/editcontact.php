<?php 
include('Configuration.php');
include('adminnav.php');
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if($conn)
{
  $id =  $_GET['id'];
  $result1 = mysqli_query($conn, " SELECT * FROM contact where id =$id;");
  $row = mysqli_fetch_array($result1);
  
    
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
    background-image: url("B2.jpg");
    background-repeat: no-repeat;
    background-size: cover;
font-family: Arial, Helvetica, sans-serif;
}

* {box-sizing: border-box;}
.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 80%;
  margin-bottom: 15px;
  border: 1.5px solid #ff4d29;
  border-bottom-width: 3px;
  transition: all 0.3s ease;
}

.icon {
  padding: 10px;
  background: #ff4d29;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 200%;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: #ff4d29;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 80%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
.content {
    max-height: 300px;
    overflow-y: scroll;
  }
</style>
</head>
<body>
<form action="updatecontact.php" method="post" style="max-width:500px;margin:auto" enctype="multipart/form-data">
  <h2>Person Information</h2>


  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="hidden" placeholder="Username" name="id" value="<?php echo $row['id'];?>">
    <input class="input-field" type="text" placeholder="Username" name="name" value="<?php echo $row['name'];?>">
  </div>

<div class="input-container">
    <i class="fa fa-mobile icon"></i>
    <input class="input-field" type="number" placeholder="Mobile Number" name="mobile" value="<?php echo $row['mobile'];?>">
  </div>

<div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="number" placeholder="Alternate Mobile Number" name="amobile" value="<?php echo $row['amobile'];?>">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" value="<?php echo $row['email'];?>">
  </div>
  

<div class="input-container">
    <i class="fa fa-address-card icon"></i>
    <input class="input-field" type="text" placeholder="Address" name="address" value="<?php echo $row['address'];?>">
  </div>

<div class="input-container">
    <i class="fa fa-whatsapp icon"></i>
    <input class="input-field" type="number" placeholder="Whatsapp Number" name="wapp" value="<?php echo $row['wapp'];?>">
  </div>

<div class="input-container">
    <i class="fa fa-briefcase icon"></i>
    <input class="input-field" type="text" placeholder="Profession/Job " name="job" value="<?php echo $row['job'];?>">
  </div>

  <button type="submit" class="btn" name="updatecontact" value="Update Contact">Update Contact</button>
</form>

