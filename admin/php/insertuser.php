<?php

// Include config file
require_once "Configuration.php";
 
// Define variables and initialize with empty values

 
// Processing form data when form is submitted
if($conn)
{
    if(isset($_POST['adduser']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        $dob=$_POST['dob'];
        $mobile=$_POST['mobile'];
        $address=$_POST['address'];
        
        $gender=$_POST['gender'];
       
        $image = $_FILES['image']['name'];
		$uploadOk = 1;
              // image file directory
              $target = "images/".basename($image);
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

              $query= "insert into users(name,email,password,cpassword,dob,mobile,address,gender,image) 
              values('$name','$email','$password','$cpassword','$dob',$mobile,'$address','$gender','$image');";
            
              if(mysqli_query($conn,$query)){

                if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                     echo "<script>alert('Contact  Details Added successfully');</script>"; 
                     echo "<script>window.location.href='viewusers.php';</script>"; 
                }else{
                     echo "<script>alert('Contact  Details Adding Failed ');</script>"; 
                     echo "<script>window.location.href='viewusers.php';</script>"; 
                }
            }
        }

    }
}

?>