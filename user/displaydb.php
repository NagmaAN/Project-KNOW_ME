<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Know Me Database</h2>        
  <table class="table table-bordered">
    <thead>
      <tr><th>Name</th><th>Email</th><th>Password</th><th>Confirm Password</th><th>Date of Birth</th><th>Mobile</th><th>Gneder</th><th>Address</th></tr>
    </thead>
    <tbody>
      
    
<?php
include('Configuration.php');
if($conn){
$squery= "select * from registerform";
$sres=mysqli_query($conn,$squery);

    if($sres){
        if(mysqli_num_rows($sres)>0){
            while($row=mysqli_fetch_row($sres)){
                echo "<tr>";
                echo "<td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td></tr>";
            }
        }

    }
}
?>
</tbody>
</table>
</center> 
</div>
<?php
if($conn){
    if(isset($_POST['delete'])){
        $dname= $_POST['dname'];
        $dquery=" delete  from registerform where name='$dname';";
        $dres= mysqli_query($conn,$dquery);
    }
}
    ?>
    <form method="post">
Enter Person name to delete <input type="text" name ="dname"/>
<input type="submit" name ="delete" value="DELETE"/></center>
</form>
</body>
</html>