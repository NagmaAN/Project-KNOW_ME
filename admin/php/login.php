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
         
         header("location: index.php");
      }else {
         
		 echo '<script>';
		 echo 'alert("Login Failed! Kindly login with valid Username and Password");';
		 echo '</script>';
      }
	
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

      <form action="login.php" method="post" >
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
                    <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                        class="link-danger">Register</a></p>
                </div>

        </form>


</div>
  

