<?php
    
    include 'includes/header.php';
?>

<form action="includes/login.php">

  <input type="text" name="email" placeholder="Email">
  <br>
  <input type="text" name="uid" placeholder="Username">
  <br>
  <input type="password" name="pwd" placeholder="Password">
  <br>
  <button type="submit" name= "submit">Sign Up</button>
</form>


  <?php
    include 'includes/footer.php';
  ?>