<?php
include('adminnav.php');

$date = date("Y/m/d");
//echo $session_userid;
if($conn){
$query = "SELECT * FROM contact WHERE userid = $session_userid AND dob = '$date';";
$reslt = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($reslt)){
echo "<script>alert('Today is : $row[name]  Birthday');</script> ";
}
}
?>
<!-- SLIDER -->
<div class="owl-carousel owl-theme hero-slider">
<div class="slide slide1">
<div class="container">
<div class="row">
<div class="col-12 text-center text-white">
<h6 class="text-white text-uppercase">Let's Start a Conversation</h6>
<h1 class="display-3 my-4">We craft digital<br />experiances</h1>
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
<div class="modal fade" id="exampleModalRF" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-xl">
<div class="modal-content">
<div class="modal-body p-0">
<div class="container-fluid">
<div class="row gy-4">
<div class="col-lg-4 col-sm-12 bg-cover"
style="background-image: url(img/GJ.jpg); min-height:300px;">
<div>
</div>
</div>
<div class="col-lg-8">
<div>
</div>
<div class="container1">
<div class="title">Registration</div>
<div class="content">
<form method="post" action="#" onsubmit=" return validation()">
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
<input class="input-field" type="int" placeholder="Mobile Number" name="mobile" id="mobile">
<span class="text-danger font-weight-bold" id="mobileError"></span>
</div>
<div class="input-box">
<i class="fa fa-address-card icon"></i>
<input class="input-field" type="text" placeholder="Address" name="address">
</div>
<div class="input-box">
<i class="fa fa-venus-mars icon"></i>
<select name="gender" id="state" class="form-control" style="width:70%">
<option>Female</option>
<option>Male</option>
<option>Other</option>
</div>
<div class="input-box">
<center>
<i class="fa fa-id-badge icon"></i>
<input type="file">
</center>
</div>
</div>
<div class="button">
<input type="submit" name ="save" value="SAVE">
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


<script>
function validation() {
var name = document.getElementById('name').value;
var email = document.getElementById('email').value;
var mobile = document.getElementById('mobile').value;
if (name == "") {
document.getElementById('nameError').innerHTML = "*** Please Enter the Name ***";
return false;
}
if (!isNaN(name)) {
document.getElementById('nameError').innerHTML = "*** Please Enter only Character as Name ***";
return false;
}
if (email == "") {
document.getElementById('emailError').innerHTML = " *** Please Enter the Email Id *** ";
return false;
}
if (email.indexOf('@') <= 1) {
document.getElementById('emailError').innerHTML = " *** Please Enter  @ at valid position  *** ";
return false;
}
if ((email.charAt(email.length - 4) != '.') && (email.charAt(email.length - 3) != '.')) {
document.getElementById('emailError').innerHTML = " *** Please Enter  . at valid position  *** ";
return false;
}
if (isNaN(mobile)) {
document.getElementById('mobileError').innerHTML = " *** Please Enter  Valid mobile number  *** ";
return false;
}
if ((mobile.length < 10) || (mobile.length > 10)) {
document.getElementById('mobileError').innerHTML = " *** Please Enter  10 digits only  *** ";
return false;
}
if((mobile.charAt(0) != 9) && (mobile.charAt(0) != 8) && (mobile.charAt(0) !=7)){
document.getElementById('mobileError').innerHTML = " *** Please Enter  9 or 8 or 7 starting digits only  *** ";
return false;
}

}
</script>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/app.js"></script>
