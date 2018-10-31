<?php
require "../../connection/ope.php";
$db=new comp2();
$eq=$db->getMech();
$dep=$db->getDepartemt();
$man=$db->getmaintenance_type();
if (isset($_POST['sub'])) {
	$id_que=$_POST['mech'];
	$note=$_POST['note'];
	$id_typ=$_POST['typ'];
    $id_dep=$_POST['deps'];
   $dat=$_POST['dates'];
   $status="new";
   
    $create=date("Y-m-d");
    $db->AddNewAppoi($id_que,$id_typ,$id_dep,$dat,$create,$note,$status);

}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../../css/style.css">
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
						<select class="form-control" name="mech">
							<?php 
                              foreach ($eq as $key) {
                              	echo '
                                 <option value='.$key['equipment_on'].'>'.$key['name']."-".$key['equipment_on'].'</option>
        
                              	';
                              }
							?>
						</select>
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="6" name="note"></textarea>
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
						<label> Maintenance Type </label>
						<select name="typ">
							<?php 
                               foreach ($man as $key ) {
                               echo '
                                  <option value='.$key['type_id'].'>'.$key['type_maninte'].'</option>
                               ';
                               }
							?>
						</select>
					</div>
					<div class="form-group">
						<label> </label>
						<input type="date" name="dates" class="form-control">
					</div>

					<div class="form-group">
						<input type="submit" name="sub" class="btn btn-save" value="Create Apppointment">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<script src="../../../js/bootstrap.js"></script>
<script src="../../../js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>