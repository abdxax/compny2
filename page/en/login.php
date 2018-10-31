<?php
session_start();
require "../connection/ope.php";

if (isset($_POST['subm'])) {
	$eml=strip_tags($_POST['email']);
	$pass=strip_tags($_POST['pass']);
	$db=new comp2();
	$db->login($eml,$pass);
}



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>

<header>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="ar-button">
				<a href="../ar/login.php" class="btn btn-info">عربي</a>
			</div>
		</div>
			<div class="col-12 ">
		      <img src="../../image/logo.jpg" class="logo-login">
	        </div>

	        <div class="col-6 offset-3">
	        	<div class="card border-light mb-3 cardx">
	        		<div class="card-header">
	        			<h3 class="text-center">
	        				Login
	        			</h3>
	        		</div>
	        		<div class="card-body">
	        			<form method="POST">
	        				<div class="form-group">
	        					<input type="text" name="email" class="form-control" placeholder="Email">
	        				</div>
	        				<div class="form-group">
	        					<input type="text" name="pass" class="form-control" placeholder="Password">
	        				</div>
	        				<div class="form-group">
	        					<input type="submit" name="subm" class="btn btn-primary btns" value="Login">
	        				</div>
	        			</form>
	        		</div>
	        	</div>
	        </div>


	</div>
</div>
</header>



<script src="../../js/bootstrap.js"></script>
<script src="../../js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>