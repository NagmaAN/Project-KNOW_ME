<?php
//include('adminnav.php');
?>

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
<style type="text/css">
  
</style>
    <title>Know_me</title>
</head>
<body>


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
</div>  </div>
                </div>

            </div>
        </div>
    </div>


</body>
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


   