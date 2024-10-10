<?php
  // Checking the form is submited or not
   if(isset($_POST['submit']))
   {
       // Getting the data from GLobal Post array.
       $fname = htmlspecialchars($_POST['fname']);
       $lname = htmlspecialchars($_POST['lname']);
       $email = htmlspecialchars($_POST['email']);

       // Storing the user data in the cookies.

       setcookie('fname' , $fname,time()+1000,'/');
       setcookie('lname' , $lname , time()+1000,'/');
       setcookie('email' , $email,time()+1000,'/');
       

       //Navigate to the page 3
       header("Location:page3.php");
       exit();

   }
?>