<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head.php'; ?>
	<title>Dango Mart | Login</title>
</head>
<body>

	<?php include 'includes/navbar.php'; ?>

	<<div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2 style = "font-weight:700">Welcome Back</h2>
      </div>
	  <div class="underline-title"></div>
	  <div id="card-heading">
	  	<h5 style="font-weight:400">We miss you so much. And welcome back to continue your shopping. Enjoy!</h5>
	  </div>
	  <div class="container">
		  <div class="row">
			  <div class="col-md">
				<img src='./img/loginPic.png' class='img-responsive img-center'>
			  </div>
			  <div class="col-md">
			  	<form method="post" class="form">
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
        			<a href="#">
          				<legend id="forgot-pass"><h5>Forgot password?</h5></legend>
        			</a>     
        			<input id="submit-btn" type="submit" name="submit" value="LOGIN" />
        			<a href="#" id="signup"><h5>Don't have account yet?</h5></a>
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

