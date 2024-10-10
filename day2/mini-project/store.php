<?php
    session_start();

    if(isset($_POST['submit']))
    {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        header("Location:home.php");
        exit();
    }
    

?>

