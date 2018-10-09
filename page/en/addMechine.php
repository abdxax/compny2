<?php
session_start();
require "../connection/ope.php";
$db=new comp2();
$dep=$db->getDepartemt();

if (isset($_POST['sub'])) {
	$name=$_POST['name'];
	$id=$_POST['equipment_on'];
	$location=$_POST['location'];
    $mec=$_POST['MAINT_SCALE'];
    $time=date("Y-m-d");
    $_SESSION['equ_ons']=$id;
    $db->addMechen ($name,$id,$location,$mec,$time);

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
						<input type="text" name="equipment_on" class="form-control" placeholder="equipment_on">
					</div>
					<div class="form-group">
						<input type="text" name="location" class="form-control" placeholder="location">
					</div>

					<div class="form-group">
						<input type="text" name="MAINT_SCALE" class="form-control" placeholder="MAINT SCALE">
					</div>
					
					<div class="form-group">
						<input type="submit" name="sub" class="btn btn-save" value="Add machine">
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