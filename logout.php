<?php
 //we always needs to start session on each pages
 session_start();
  unset($_SESSION['usernames']); 
  header('location:homes.php');

?>