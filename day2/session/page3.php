<?php
  session_start();

  if(isset($_SESSION['fname']) && isset($_SESSION['lname']) && isset($_SESSION['email']))
  {
    $fname = htmlspecialchars($_SESSION['fname']);
    $lname = htmlspecialchars($_SESSION['lname']);
    $email = htmlspecialchars($_SESSION['email']);
  }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data is Coming from Session</h1>
    <h1>Welcome , <?php echo $fname." ".$lname ?>
    <h2>Yoour Email ID is: <?php echo $email ?></h2>
</body>
</html>

<?php
  // session_destroy();
?>