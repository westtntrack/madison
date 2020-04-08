<?php
    include_once 'includes/connect.inc.php';
    include 'includes/header.php';
?>
<div class="container">
  <div class="row">
        <div class="col-md-6">
        <?php
				$sql = "SELECT * FROM users;";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result); 

					if ($resultCheck > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo $row['user_uid'] . "<br>";
					}
				}
      ?>
    </div>
			
        
    <div class="col-md-6">
        
    </div>
  </div>
    
</div>

  <?php
    include 'includes/footer.php';
  ?>