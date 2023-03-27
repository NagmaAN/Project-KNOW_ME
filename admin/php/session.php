<?php
   include('Configuration.php');
   session_start();
   
   $email = $_SESSION['email'];
   
   $ses_sql = mysqli_query($conn,"select adminid,adminname from admin where email = '$email'; ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $session_adminname = $row['adminname'];
   $session_adminid = $row['adminid'];
   
   if(!isset($_SESSION['email'])){
      header("location:login.php");
      die();
   }
?>