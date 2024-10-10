<?php
 if(isset($_COOKIE['fname']) && isset($_COOKIE['lname']) && isset($_COOKIE['email']))
 {
    $fname = htmlspecialchars($_COOKIE['fname']);
    $lname = htmlspecialchars($_COOKIE['lname']);
    $email = htmlspecialchars($_COOKIE['email']);
  
 }
 else{
    header("Location:page1.php");
    exit();
 }



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data is Coming From Cookies!!!</h1>
    <h2>Welcome, <?php echo $fname . " " . $lname ?></h2>
    <h2>Your Email is <?php echo $email ?></h2>
</body>
</html>