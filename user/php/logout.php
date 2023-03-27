<?php
   session_start();
   
   if(session_destroy()) {
	   echo "<script> alert('logged out successfully');";
      echo "window.location.href='../index.php';</script>";
   }
?>