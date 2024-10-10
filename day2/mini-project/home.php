
<?php
session_start();

if(isset($_POST['logout']))
{
    session_unset();
    session_destroy();
    header("Location:login.php");
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
      <h1>Home Page</h1>
      <h2>Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?></h2>
      <form action="home.php" method="POST">
        <input type="submit" value="Logout" name="logout">
      </form>
</body>
</html>