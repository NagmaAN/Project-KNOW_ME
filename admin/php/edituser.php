<?php
include('adminnav.php');
include('Configuration.php');
//include('session.php');
$id =  $_GET['id'];
$result1 = mysqli_query($conn, " SELECT * FROM users where id =$id;");
$row = mysqli_fetch_array($result1);
echo $row['name'];

?>

<div class="container1 m-5">
    <div class="title">Edit  User</div>
    <div class="content">
      <form method="post" action="updateuser.php" enctype="multipart/form-data" >
        <div class="user-details">
            <div class="input-box">
             <i class="fa fa-user icon"></i>
             <input  type="hidden" placeholder="id" name="id" id="name" value="<?php echo $row['id']; ?>">
             <input class="input-field" type="text" placeholder="Username" name="name" id="name" value="<?php echo $row['name']; ?>">
             <span class="text-danger font-weight-bold" id="nameError"></span>
            </div>
          <div class="input-box">
            <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" id="email" value="<?php echo $row['email']; ?>">
    <span class="text-danger font-weight-bold" id="emailError"></span>
  </div>
          <div class="input-box">
            
            <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password" id="password" value="<?php echo $row['password']; ?>">
    <span class="text-danger font-weight-bold" id="passwordError"></span>
  </div>
  <div class="input-box">
            <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Confirm Password" name="cpassword" id="cpassword" value="<?php echo $row['cpassword']; ?>">
    <span class="text-danger font-weight-bold" id="passwordError"></span>
  </div>
          
          <div class="input-box">
            <i class="fa fa-mobile icon"></i>
            <input class="input-field" type="number" placeholder="Mobile Number" name="mobile" id="mobile" value="<?php echo $row['mobile']; ?>">
            <span class="text-danger font-weight-bold" id="mobileError"></span>
          </div>
  <div class="input-box">
            <i class="fa fa-address-card icon"></i>
    <input class="input-field" type="text" placeholder="Address" name="address" value="<?php echo $row['address']; ?>">
  </div>
         
          
        
    </div>

        <div class="button">
          <input type="submit" name ="updateuser" value="Update User">
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


   