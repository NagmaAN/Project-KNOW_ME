<?php

// Include config file
require_once "Configuration.php";
 
// Define variables and initialize with empty values

 
// Processing form data when form is submitted
if($conn)
{
    if(isset($_POST['updateuser']))
    {
         $id = $_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
       
        $mobile=$_POST['mobile'];
        $address=$_POST['address'];

  $query= " UPDATE users SET name='$name',email='$email',password = '$password' ,cpassword = '$cpassword', mobile = $mobile , address ='$address' WHERE id = $id;";
              
            
              if(mysqli_query($conn,$query)){
                     echo "<script>alert('User  Details Updated successfully');</script>"; 
                     echo "<script>window.location.href='viewusers.php';</script>"; 
                }else{
                     echo "<script>alert('User  Details Updation Failed ');</script>"; 
                     echo "<script>window.location.href='viewusers.php';</script>"; 
                }
    }
}

?>