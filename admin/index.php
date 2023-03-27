<?php
include('Configuration.php');
// Check connection
if($conn === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}

if($conn){
if(isset($_POST['delete'])){
$dname= $_POST['dname'];
$dquery=" delete  from registerform where name='$dname';";
$dres= mysqli_query($conn,$dquery);
}
}
?>

<?php
require_once("Configuration.php");
session_start();
if($conn){
if(isset($_POST['login'])){
$email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT * FROM admin WHERE email = '$email' and password = '$password';";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
if($count) {
$_SESSION['email'] = $email;
header("location: php/index.php");
}
else {
echo '<script>';
echo 'alert("Login Failed! Kindly login with valid Username and Password");';
echo '</script>';
}
}
}
?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="css/style1.css">
<title>Know_me</title>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
<!-- TOP NAV -->
<div class="top-nav" id="home">
<div class="container">
<div class="row justify-content-between">
<div class="col-auto">
<p> <i class='bx bxs-envelope'></i> knowme@gmail.com</p>
<p> <i class='bx bxs-phone-call'></i> (219) 555-0114</p>
</div>
<div class="col-auto social-icons">
<a href="#"><i class='bx bxl-facebook'></i></a>
<a href="#"><i class='bx bxl-twitter'></i></a>
<a href="#"><i class='bx bxl-instagram'></i></a>
<a href="#"><i class='bx bxl-pinterest'></i></a>
</div>
</div>
</div>
</div>
<!-- BOTTOM NAV -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
<div class="container">
<a href=""><img src="img/KM2.png" width="70px" height="70px"></a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav" style="padding-left:600px">
<ul class="navbar-nav ms-auto">
<li class="nav-item">
<a href="#home" class="ab ms-lg-3">Home</a>
</li>
</ul>
</div>
</div>
</nav>
<!-- SLIDER -->
<div class="owl-carousel owl-theme hero-slider">
<div class="slide slide1">
<div class="container">
<div class="row">
<div class="col-12 text-center text-white">
<h6 class="text-white text-uppercase">Let's Start a Conversation</h6>
<h1 class="display-3 my-4">We craft digital<br />experiances</h1>
<a href="#" class="btn btn-outline-light ms-3" data-bs-toggle="modal" data-bs-target="#exampleModallogin">Login</a>
</div>
</div>
</div>
</div>
<div class="slide slide2">
<div class="container">
<div class="row">
<div class="col-12 col-lg-10 offset-lg-1 text-white">
<h6 class="text-white text-uppercase">We craft digital experiances</h6>
<h1 class="display-3 my-4">Design Driven For <br />Professionals</h1>
<a href="#" class="btn btn-outline-light ms-3" data-bs-toggle="modal" data-bs-target="#exampleModallogin">Login</a>
</div>
</div>
</div>
</div>
<div class="slide slide3">
<div class="container">
<div class="row">
<div class="col-12 col-lg-10 offset-lg-1 text-white">
<h6 class="text-white text-uppercase">We craft digital experiances</h6>
<h1 class="display-3 my-4">Design Driven For <br />Professionals</h1>
<a href="#" class="btn btn-outline-light ms-3" data-bs-toggle="modal" data-bs-target="#exampleModallogin">Login</a>
</div>
</div>
</div>
</div>
<div class="slide slide4">
<div class="container">
<div class="row">
<div class="col-12 col-lg-10 offset-lg-1 text-white">
<h6 class="text-white text-uppercase">We craft digital experiances</h6>
<h1 class="display-3 my-4">Design Driven For <br />Professionals</h1>
<a href="#" class="btn btn-outline-light ms-3" data-bs-toggle="modal" data-bs-target="#exampleModallogin">Login</a>
</div>
</div>
</div>
</div>
<div class="slide slide5">
<div class="container">
<div class="row">
<div class="col-12 col-lg-10 offset-lg-1 text-white">
<h6 class="text-white text-uppercase">We craft digital experiances</h6>
<h1 class="display-3 my-4">Design Driven For <br />Professionals</h1>
<a href="#" class="btn btn-outline-light ms-3" data-bs-toggle="modal" data-bs-target="#exampleModallogin">Login</a>
</div>
</div>
</div>
</div>
<div class="slide slide6">
<div class="container">
<div class="row">
<div class="col-12 col-lg-10 offset-lg-1 text-white">
<h6 class="text-white text-uppercase">We craft digital experiances</h6>
<h1 class="display-3 my-4">Design Driven For <br />Professionals</h1>
<a href="#" class="btn btn-outline-light ms-3" data-bs-toggle="modal" data-bs-target="#exampleModallogin">Login</a>
</div>
</div>
</div>
</div>
<div class="slide slide7">
<div class="container">
<div class="row">
<div class="col-12 col-lg-10 offset-lg-1 text-white">
<h6 class="text-white text-uppercase">We craft digital experiances</h6>
<h1 class="display-3 my-4">Design Driven For <br />Professionals</h1>
<a href="#" class="btn btn-outline-light ms-3" data-bs-toggle="modal" data-bs-target="#exampleModallogin">Login</a>
</div>
</div>
</div>
</div>
</div>
<footer>
<div class="footer-top text-center">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6 text-center">
<p>Thank you</p>
<div class="col-auto social-icons">
<a href="#"><i class='bx bxl-facebook'></i></a>
<a href="#"><i class='bx bxl-twitter'></i></a>
<a href="#"><i class='bx bxl-instagram'></i></a>
<a href="#"><i class='bx bxl-pinterest'></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="footer-bottom text-center">
<p class="mb-0">Copyright@2022. All rights Reserved</p>
</div>
</footer>

<!-- Modal -->
<div class="modal fade" id="exampleModallogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-xl">
<div class="modal-content">
<div class="modal-body p-0">
<div class="container-fluid">
<div class="row gy-4">
<section class="vh-100">
<div class="container-fluid h-custom">
<div class="row d-flex justify-content-center align-items-center h-100">
<div class="col-md-9 col-lg-6 col-xl-5">
<img src="img/P0.png"
class="img-fluid" alt="Sample image">
</div>
<div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
<div class="container1">
<div class="title">Login</div>
<div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
<p class="lead fw-normal mb-0 me-3">Sign in with</p>
<div class="col-auto social-icons" style="color: #ff4d29; background-color: #ff4d29;">
<a href="#"><i class='bx bxl-facebook'></i></a>
<a href="#"><i class='bx bxl-twitter'></i></a>
<a href="#"><i class='bx bxl-instagram'></i></a>
<a href="#"><i class='bx bxl-pinterest'></i></a>
</div>
</div>
<div class="divider d-flex align-items-center my-4">
<p class="text-center fw-bold mx-3 mb-0">Or</p>
</div>
<div class="content">
<form action="index.php" method="post" >
<div class="user-details">
<div class="input-box" style="width:300px;">
<i class="fa fa-envelope icon"></i>
<input class="input-field" type="text" placeholder="Email" name="email">
</div>
<div class="input-box" style="width:300px;">
<i class="fa fa-key icon"></i>
<input class="input-field" type="password" placeholder="Password" name="password">
</div>
</div>
<div class="text-center text-lg-start mt-4 pt-2">
<input type="submit" name="login" class="btn btn-primary btn-lg"
style="padding-left: 2.5rem; padding-right: 2.5rem; background-color:#ff4d29;" value="Login">
<p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php"
class="link-danger">Register</a></p>
</div>
</form>
</div>
<!-- Right -->
<div class="container">
<div class="row justify-content-between">
<div class="col-auto">
</div>
<div class="col-auto social-icons">
<a href="#"><i class='bx bxl-facebook'></i></a>
<a href="#"><i class='bx bxl-twitter'></i></a>
<a href="#"><i class='bx bxl-instagram'></i></a>
<a href="#"><i class='bx bxl-pinterest'></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalRF" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-xl">
<div class="modal-content">
<div class="modal-body p-0">
<div class="container-fluid">
<div class="row gy-4">
<div class="col-lg-4 col-sm-12 bg-cover"
style="background-image: url(img/GJ.jpg); min-height:300px;">
</div>
<div class="col-lg-8">
<div class="container1">
<div class="title">Registration</div>
<div class="content">
<form method="post" action="insertuser.php" enctype="multipart/form-data" >
<div class="user-details">
<div class="input-box">
<i class="fa fa-user icon"></i>
<input class="input-field" type="text" placeholder="Username" name="name" id="name">
<span class="text-danger font-weight-bold" id="nameError"></span>
</div>
<div class="input-box">
<i class="fa fa-envelope icon"></i>
<input class="input-field" type="text" placeholder="Email" name="email" id="email">
<span class="text-danger font-weight-bold" id="emailError"></span>
</div>
<div class="input-box">
<i class="fa fa-key icon"></i>
<input class="input-field" type="password" placeholder="Password" name="password" id="password">
<span class="text-danger font-weight-bold" id="passwordError"></span>
</div>
<div class="input-box">
<i class="fa fa-key icon"></i>
<input class="input-field" type="password" placeholder="Confirm Password" name="cpassword" id="cpassword">
<span class="text-danger font-weight-bold" id="passwordError"></span>
</div>
<div class="input-box">
<i class="fa fa-birthday-cake icon"></i>
<input class="input-field" type="Date" placeholder="Date of Birth" name="dob">
</div>
<div class="input-box">
<i class="fa fa-mobile icon"></i>
<input class="input-field" type="number" placeholder="Mobile Number" name="mobile" id="mobile">
<span class="text-danger font-weight-bold" id="mobileError"></span>
</div>
<div class="input-box">
<i class="fa fa-address-card icon"></i>
<input class="input-field" type="text" placeholder="Address" name="address">
</div>
<div class="input-container col-sm-3" style="width: 300px;">
<i class="fa fa-user icon"></i>
<select name="gender" id="" class="input-field" class="col-sm-3">
<option value="">Select Gender</option>
<option value="Male">Male</option>
<option value="FeMale">Female</option>
<option value="Other">Other</option>
</select>
</div>
<div class="input-box">
<center>
<i class="fa fa-id-badge icon"></i>
<input type="file" name="image"  />
</center>
</div>
</div>
<div class="button">
<input type="submit" name ="adduser" value="Register">
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>