  <!---------------------------------------------- Passing data from one page to another page using GET --------------------------------------------------------->
  <!-- This involves passing data through the URL. The data is visible in the browser's address bar, so it's not secure for sensitive information, 
    but it's simple and commonly used for non-sensitive data like search queries or page navigation. -->

  <!-- <form action="page2.php" method="GET">
  <input type="text" name="fname" placeholder= "Enter the First Name" >
  <input type="text" name="lname" placeholder= "Enter the Last Name" >
  <input type="text" name="email" placeholder= "Email Address" >
  <input type="submit" value="submit">
  </form> -->


   <!---------------------------------------------- Passing data from one page to another page using POST --------------------------------------------------------->
  <!-- The POST method is more secure than GET because the data is not shown in the URL. It is commonly used when submitting forms that involve sensitive data like passwords. -->
  <form action="page2.php" method="POST">
  <input type="text" name="fname" placeholder= "Enter the First Name" >
  <input type="text" name="lname" placeholder= "Enter the Last Name" >
  <input type="text" name="email" placeholder= "Email Address" >
  <input type="submit" value="submit">
  </form>
  
