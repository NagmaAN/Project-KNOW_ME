<?php 
include('Configuration.php');
include('adminnav.php');
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if($conn)
{
        if(isset($_POST['updatecontact']))
        {
            $id=$_POST['id'];
              $name=$_POST['name'];
              $mobile=$_POST['mobile'];
              $amobile=$_POST['amobile'];
              $email=$_POST['email'];
             
              $address=$_POST['address'];
              
              $wapp=$_POST['wapp'];
              $job=$_POST['job'];
          
$query= " UPDATE contact  SET name='$name',mobile = '$mobile' ,amobile ='$amobile' ,email = '$email',
          address = '$address',wapp ='$wapp' ,job ='$job' WHERE id= $id;";
         
            
              if(mysqli_query($conn,$query)){
                     echo "<script>alert('Contact  Details Updated successfully');</script>"; 
                    echo "<script>window.location.href='viewcontacts.php';</script>"; 
                }else{
                     echo "<script>alert('Contact  Details Updating Failed ');</script>"; 
                     echo "<script>window.location.href='viewcontacts.php';</script>";
                }
    }
}

?>