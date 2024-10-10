<?php
 session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="page2.php" method="POST">
        <input type="text" name="fname" placeholder="Enter the first name">
        <input type="text" name="lname" placeholder="Enter the last name">
        <input type="email" name="email" placeholder="Enter the email">
        <input type="submit" value="Submit">
    </form>
</body>
</html>