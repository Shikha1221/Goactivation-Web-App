<?php
//start session (must)
 session_start();

 // unset session by name
 unset($_SESSION['username']);
  unset($_SESSION['error']);

 // unset all
 session_destroy();

 echo"<script>window.location='../index.php'</script>"; // Redirecting To Home Page

?>

