<?php 
include('Configuration.php');
include('session.php');

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if($conn)
{
    
    if(isset($_POST['save']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        $dob=$_POST['dob'];
        $mobile=$_POST['mobile'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        //echo 'connected';
        $query= "insert into registerform(name,email,password,cpassword,dob,mobile,gender,address) 
        values('$name','$email','$password','$cpassword','$dob',$mobile,'$gender','$address');";
        $res=mysqli_query($conn,$query);
    }
}

if($conn){
    if(isset($_POST['delete'])){
        $dname= $_POST['dname'];
        $dquery=" delete  from registerform where name='$dname';";
        $dres= mysqli_query($conn,$dquery);
    }
}
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
                        <a href="index.php" class="ab ms-lg-3">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#about" class="ab ms-lg-3">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="viewusers.php" class="ab ms-lg-3">Users</a>
                    </li>
                    <li class="nav-item">
                        <a href="viewcontacts.php" class="ab ms-lg-3">My_Contacts</a>
                    </li>
                   
                      
                    <li class="nav-item">
                        <a href="logout.php" class="ab ms-lg-3">LogOut</a>
                    </li>
                    
                </ul>
                
     
            </div>
        </div>
    </nav>

   











    


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <form class="p-lg-5 col-12 row g-3">
                                    <div>
                                        <h1>Get in touch</h1>
                                    <p>Fell free to contact us and we will get back to you as soon as possible</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">First name</label>
                                        <input type="text" class="form-control" placeholder="Jon" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">Last name</label>
                                        <input type="text" class="form-control" placeholder="Doe" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="userName" class="form-label">Email address</label>
                                        <input type="email" class="form-control" placeholder="Johndoe@example.com" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="exampleInputEmail1" class="form-label">Enter Message</label>
                                        <textarea name="" placeholder="This is looking great and nice." class="form-control" id=""  rows="4"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-brand">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

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
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form><div class="container1">
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

      <form action="#">
        <div class="user-details">
          <div class="input-box" style="width:300px;">
            <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="emai">
  </div>
          <div class="input-box" style="width:300px;">
            <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="ps">
  </div>
</div>
</form>
</div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="button" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem; background-color:#ff4d29;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
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
</body>

</html>