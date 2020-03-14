<?php
      include_once("C:\\xampp\\htdocs\\__inc\\config.php");
      include_once(DIR."/__inc/structure/login-config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="/../css/bootstrap/bootstrap.min.css">

   <!-- jquery -->
   <script src="/../vendor/jquery/jquery.min.js"></script>
    
   <!--Fontawesome CDN-->
	<link rel="stylesheet" href="/../vendor/fontawesome-free/css/all.min.css">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="/../css/login.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card" style="height: 18rem;">
			<div class="card-header">
				<h3>Sign In</h3>
			</div>
			<div class="card-body" >
				<form action="" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="username" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="password" placeholder="password" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox" name="rememberme">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
            <div style = "font-size:12px; color:#f75a4f; margin-top:10px"><?php  echo $error; ?></div>
			</div>
		</div>
	</div>
</div>
</body>
</html>