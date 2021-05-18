<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
	<title>Dango Mart | Register</title>
</head>
<body>

	<?php include 'includes/navbar.php'; ?>

	<<div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2 style = "font-weight:700">Sign Up</h2>
      </div>
	  <div class="underline-title"></div>
	  <div id="card-heading">
	  	<h5 style="font-weight:400">Earn points and enjoy up to 8% discount as a VIP member</h5>
	  </div>
	  <div class="container">
		  <div class="row">
			  <div class="col-md">
				<img src='./img/registerPic.png' class='img-responsive img-center'>
			  </div>
			  <div class="col-md">
			  	<form method="post" class="form">
        			<label for="user-name" style="padding-top:13px">
            		&nbsp;Name
          			</label>
        			<input id="user-name" class="form-content" type="name" name="name" autocomplete="on" required />
        			<div class="form-border"></div>
                    <label for="user-email" style="padding-top:13px">
            		&nbsp;Email
          			</label>
        			<input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
        			<div class="form-border"></div>
        			<label for="user-password" style="padding-top:22px">
					&nbsp;Password
          			</label>
        			<input id="user-password" class="form-content" type="password" name="password" required />
        			<div class="form-border"></div>  
        			<input id="submit-btn" type="submit" name="submit" value="Create Account"  onclick="window.location='index.php';"/>
        			
      			</form>
			  </div>
		  </div>
	  </div>
      
    </div>
  </div>


		</div>
	</div>


	<?php include 'includes/footer.php'; ?>
	<?php include 'includes/scripts.php'; ?>


</body>
</html>

