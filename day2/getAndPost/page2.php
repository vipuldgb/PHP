<?php
    if (isset($_POST['fname'])) {
        $fname = htmlspecialchars($_POST['fname']);
        $lname = htmlspecialchars($_POST['lname']);
        $email = htmlspecialchars($_POST['email']);
        echo "Data is coming by Post Method <br>";
        echo "Hello, " . $fname . $lname , "<br>";
        echo "Email: " .$email;
    }
    else if(isset($_GET['fname'])) {
        $fname = htmlspecialchars($_GET['fname']);
        $lname = htmlspecialchars($_GET['lname']);
        $email = htmlspecialchars($_GET['email']);
        echo "Data is coming from GET Method <br>";
        echo "Hello, " . $fname . $lname , "<br>";
        echo "Email: " .$email;
    }
?>
