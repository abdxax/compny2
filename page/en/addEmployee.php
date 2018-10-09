<?php
require "../connection/ope.php";
$db=new comp2();
$dep=$db->getDepartemt();

if (isset($_POST['sub'])) {
	$name=$_POST['name'];
	$eamil=$_POST['email'];
	$phone=$_POST['phone'];
    $deps=$_POST['deps'];
    $role=0;
    $pass=$_POST['passws'];
    $time=date("Y-m-d");
    $db->CreateUser($name,$eamil,$phone,$deps,$role,$time,$pass);

}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>

<header>

</header>

<section>
	<div class="container">
		<div class="row">
			<div class="col-6">
				<form method="POST">
					<div class="form-group">
						<input type="text" name="name" class="form-control" placeholder="name">
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="email">
					</div>
					<div class="form-group">
						<input type="password" name="passws" class="form-control" placeholder="pass">
					</div>

					<div class="form-group">
						<input type="number" name="phone" class="form-control" placeholder="Phone">
					</div>
					<div class="form-group">
						<label> Department </label>
						<select name="deps">
							<?php 
                               foreach ($dep as $key ) {
                               echo '
                                  <option value='.$key['departemt_id'].'>'.$key['department_name'].'</option>
                               ';
                               }
							?>
						</select>
					</div>

					<div class="form-group">
						<label> Postion </label>
						<select name="role">
							
						</select>
					</div>


					<div class="form-group">
						<input type="submit" name="sub" class="btn btn-save" value="Create user ">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<script src="../../js/bootstrap.js"></script>
<script src="../../js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>