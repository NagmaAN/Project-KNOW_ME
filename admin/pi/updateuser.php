<?php
include('Configuration.php');
if($link)
{
    if(isset($_POST['update']))
    {   
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

$query="UPDATE  users SET 
        name='$name',
        mobile='$mobile',
        amobile='$amobile',
        email='$email',
        dob='$dob',
        gender='$gender',
        address=$'address',
        state=$'state',
        pin=$'pin',
        wapp=$'wapp',
        job=$'job'
        ano=$'ano';";
        $res=mysqli_query($link,$query);
            if($res){
                echo '<script>alert("Updated Successfully !");';
                //header("location:userhome.php");
        echo "window.location.href='displaydb.php'; </script>";
            
            }else{
                echo '<script>alert("Failed");</script>';
            }   
    }
}
else{
    echo 'failed';
}
?>