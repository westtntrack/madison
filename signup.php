<?php
    
    include 'includes/header.php';

?>


<!-- Sign up Form -->
<div class="container signup">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class = "row">
      <div class="col-md-6">
        <h1 class="text-left">Sign Up Now</h1>
        <p class="text-left">Enter your information here.</p>
        <br>
        <form action="includes/signup.inc.php" method="POST">
  <input type="text" name="first" placeholder="First Name">
  <br>
  <input type="text" name="last" placeholder="Last Name">
  <br>
  <input type="text" name="email" placeholder="Email">
  <br>
  <input type="text" name="uid" placeholder="Username">
  <br>
  <input type="password" name="pwd" placeholder="Password">
  <br>
  <button type="submit" name= "submit">Sign Up</button>
</form>
      </div>
      <div class="col-md-6"></div>
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>
<!-- End of Sign up Form --> 

  <?php
    include 'includes/footer.php';
  ?>