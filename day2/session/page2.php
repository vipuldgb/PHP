<?php
  session_start();


  if(isset($_SESSION['fname'])){
    header("Location:page3.php");
  }else{
//Check the data is submittesd or not
if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) )
{
  //Store the data in the session
  $_SESSION['fname'] = $_POST['fname'];
  $_SESSION['lname'] = $_POST['lname'];
  $_SESSION['email'] = $_POST['email'];

  //Redirect to the page 3 to show the user data;
  header("Location:page3.php");
  exit();
}
}
  
?>