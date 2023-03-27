<?php
   include('Configuration.php');
   session_start();
   
   $email = $_SESSION['email'];
   
   $ses_sql = mysqli_query($conn,"select * from users where email = '$email'; ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $session_username = $row['name'];
   $session_userid = $row['id'];
   
   if(!isset($_SESSION['email'])){
      header("location:login.php");
      die();
   }
?>