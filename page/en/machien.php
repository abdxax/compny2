<?php
session_start();
require "../connection/ope.php";
$db=new comp2();
$equ=$db->getAllMachien();

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
			<div class="col-12">
				<h3 class="text-center">Search Machine </h3>
			</div>
			<div class="col-12">
				<div class="col-6 offset-4">
					<form class="form-inline">
					<div class="col-6">
						<input type="text" name="eqon" class="form-control" placeholder="EQUIPMENT NO">
					</div>
					<div class="col-6">
						<input type="submit" name="sub" class="btn btn-info" value="Search">
					</div>
					
				</form>
				</div>
			</div>
			<div class="col-3">
				<ul class="nav navbar-nav">
					<li><a href="addMechine.php">Add new Machine</a></li>
					<li><a href="#">print report </a></li>
					<!--<li><a href="#">Add new Machine</a></li>-->
				</ul>
			</div>

			<div class="col-8">
				<table class="table">
					<thead>
						<tr>
							<th>ON</th>
							<th>EQUIPMENT</th>
							<th>EQUIPMENT NO</th>
							<th>LOCATION</th>
							<th>MAINT SCALE</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
						$on=1;
                          foreach ($equ as $key ) {
                          	echo '
                             <tr>
                             <td>'.$on.'</td>
                              <td><a href=machien_detal.php?id='.$key['equipment_on'].'>'.$key['name'].'</a></td>
                              <td>'.$key['equipment_on'].'</td>
                              <td>'.$key['location'].'</td>
                              <td>'.$key['MAINT_SCALE'].'</td>

                             </tr>
                          	';
                          	$on++;
                          }
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>

<script src="../../js/bootstrap.js"></script>
<script src="../../js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>