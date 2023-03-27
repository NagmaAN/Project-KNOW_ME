<?php
include('adminnav.php');
?>

<div class="container1 m-5">
    <div class="title">Add User</div>
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
          <input type="submit" name ="adduser" value="Add User">
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


   