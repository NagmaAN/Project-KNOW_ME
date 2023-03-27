<?
include('Configuration.php');
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