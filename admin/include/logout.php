<?php
  session_start();


 if(isset($_POST['logout'])){
     session_destroy();
     unset( $_SESSION['username']);
     header('Location: ../../index.php');
 }
 
 if(isset($_POST['logout_user'])){
  session_destroy();
  unset( $_SESSION['username']);
  header('Location: ../../index.php');
}
?>