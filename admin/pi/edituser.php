<?php 
include("Configuration.php");

$id= $_GET['id']; 
	 $result1 = mysqli_query($conn, " SELECT * FROM personinfo where id=$id");
$row = mysqli_fetch_array($result1)

?>
<div class="container bg-info col-sm-3" style="margin-left: 460px; margin-top:15px; ">
  
    <form action="updateuser.php" method="post">
      
      <div class="form-group-inline ">
        <h1>Registration</h1>
  
        <label for> Name:</label>
        <input type="text" name="name" class="form-control col-sm-12" value="<?php echo $row['name'];?>" placeholder="Enter  name">
       
        <label for>Mobile-No:</label>
        <input type="int" name='mobile' class="form-control  col-sm-12" id="p4" value="<?php echo $row['mobile'];?>"  placeholder="Enter mobile number">
        <br>
        <label for>Alternate Mobile-No:</label>
        <input type="int" name='amobile' class="form-control  col-sm-12" id="p4" value="<?php echo $row['amobile'];?>"  placeholder="Enter mobile number">
        <br>
        <label for>Alternate Mobile-No:</label>
        <input type="int" name='amobile' class="form-control  col-sm-12" id="p4" value="<?php echo $row['amobile'];?>"  placeholder="Enter mobile number">
        <br>
        <label for>Email</label>
        <input type="int" name='email' class="form-control  col-sm-12" id="p4" value="<?php echo $row['email'];?>"  placeholder="Enter Email ID">
        <br>
        <label for>Date of Birth</label>
        <input type="int" name='dob' class="form-control  col-sm-12" id="p4" value="<?php echo $row['dob'];?>"  placeholder="Enter date of Birth">
        <br>
        <label>Gender</label>
       <input type="radio" name="gender" value="Male">Male
       <input type="radio" name="gender" value="Female">Female
       
        <br>
        <label for>Address</label>
        <input type="int" name='address' class="form-control  col-sm-12" id="p4" value="<?php echo $row['address'];?>"  placeholder="Enter mobile number">
        <br>
        <label for>State</label>
        <input type="int" name='state' class="form-control  col-sm-12" id="p4" value="<?php echo $row['state'];?>"  placeholder="Enter mobile number">
        <br>
        <label for>Pincode</label>
        <input type="int" name='pin' class="form-control  col-sm-12" id="p4" value="<?php echo $row['pin'];?>"  placeholder="Enter mobile number">
        <br>
        <label for>Whatsapp Number</label>
        <input type="int" name='wapp' class="form-control  col-sm-12" id="p4" value="<?php echo $row['wapp'];?>"  placeholder="Enter mobile number">
        <br>
        <label for>Job</label>
        <input type="int" name='job' class="form-control  col-sm-12" id="p4" value="<?php echo $row['job'];?>"  placeholder="Enter mobile number">
        <br>
        <label for>Adhaar Number</label>
        <input type="int" name='ano' class="form-control  col-sm-12" id="p4" value="<?php echo $row['ano'];?>"  placeholder="Enter mobile number">
        <br>
       
       <br><br>
       
       <input type="hidden" name='id'  value="<?php echo $row['id'];?>" name="id">
       

       <input type="submit" name="update" value="Update" class="btn btn-dark mb-3" style="margin-left:40%;">
        </div>
  
    </form>
    
  </div>
  
     
  

 