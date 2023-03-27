<?php 
include('Configuration.php');
include('adminnav.php');
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if($conn)
{
  
        if(isset($_POST['addcontact']))
        {
          $userid = $session_userid;
              $name=$_POST['name'];
              $mobile=$_POST['mobile'];
              $amobile=$_POST['amobile'];
              $email=$_POST['email'];
              $dob=$_POST['dob'];
              $gender=$_POST['gender'];
              $address=$_POST['address'];
              $state=$_POST['state'];
              $pin=$_POST['pin'];
              $wapp=$_POST['wapp'];
              $job=$_POST['job'];
              $ano=$_POST['ano'];
              $image = $_FILES['image']['name'];
                  
              $uploadOk = 1;
              // image file directory
              $target = "../../admin/php/images/".basename($image);
              $imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));
              
              // Check if file already exists
            if (file_exists($target)) {
              echo "<script>alert('File Already Exists');</script>";
              $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["image"]["size"] > 5000000) {
              echo "<script>alert('Sorry, your file is too large.');</script>"; 
              $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
              echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";   
              $uploadOk = 0;
            }
              
            if($uploadOk ==1){

              $query= "insert into contact(userid,name,mobile,amobile,email,dob,gender,address,state,pin,wapp,job,ano,image) 
              values($userid,'$name',$mobile,$amobile,'$email','$dob','$gender','$address','$state',$pin,$wapp,'$job',$ano,'$image');";
            
              if(mysqli_query($conn,$query)){

                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                     echo "<script>alert('Contact  Details Added successfully');</script>"; 
                     echo "<script>window.location.href='viewcontacts.php';</script>"; 
                }else{
                     echo "<script>alert('Contact  Details Adding Failed ');</script>"; 
                }
            }
        }

    }
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
<form action="addcontact.php" method="post" style="max-width:500px;margin:auto" enctype="multipart/form-data">
  <h2>Person Information</h2>
<div class="input-container">
<center>
    <i class="fa fa-id-badge icon">     </i>
    <input type="file" name="image"  />
</center>
  </div>

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="name">
  </div>

<div class="input-container">
    <i class="fa fa-mobile icon"></i>
    <input class="input-field" type="int" placeholder="Mobile Number" name="mobile">
  </div>

<div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="int" placeholder="Alternate Mobile Number" name="amobile">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email">
  </div>
  
<div class="input-container">
    <i class="fa fa-birthday-cake icon"></i>
    <input class="input-field" type="Date" placeholder="Date of Birth" name="dob">
  </div>

<div class="input-container">
<i class="fa fa-user icon"></i>
<select name="gender" id="" class="input-field" >
  <option value="">Select Gender</option>
  <option value="Male">Male</option>
  <option value="FeMale">Female</option>
  <option value="Other">Other</option>
</select>

 </div>

<div class="input-container">
    <i class="fa fa-address-card icon"></i>
    <input class="input-field" type="text" placeholder="Address" name="address">
  </div>

<div class="input-container">
    <i class="fa fa-map icon"></i>
    <select name="state" id="state" class="form-control">
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
  </div>

<div class="input-container">
    <i class="fa fa-map-marker icon"></i>
    <input class="input-field" type="int" placeholder="Pin Code " name="pin">
  </div>

<div class="input-container">
    <i class="fa fa-whatsapp icon"></i>
    <input class="input-field" type="int" placeholder="Whatsapp Number" name="wapp">
  </div>

<div class="input-container">
    <i class="fa fa-briefcase icon"></i>
    <input class="input-field" type="text" placeholder="Profession/Job " name="job">
  </div>

<div class="input-container">
    <i class="fa fa-id-card icon"></i>
    <input class="input-field" type="int" placeholder="Adhaar Number " name="ano">
  </div>

  <button type="submit" class="btn" name="addcontact" value="Save Contact">Save</button>
</form>

