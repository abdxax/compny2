<?php
session_start();
require "../../connection/ope.php";
$db=new comp2();

if (isset($_GET['id'])) {
  $name="";
  $location="";
  $note="";
  $date1="";
$empl=$db->getEmployeeAtDepartment($_SESSION['depart']);
  $equ=$db-> getTickit($_GET['id']);
  foreach ($equ as $key ) {
   $name=$key['name'];
   $location=$key['location'];
   $note=$key['Note'];
   $date1=$key['craete_att'];
  }

  if (isset($_POST['sub'])) {
  	$em=$_POST['emp'];
  	$dt=date("Y-m-d");

  	$db->openTicket($em,$_GET['id'],$dt,"",$_SESSION['depart']);

  }

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
			<div class="col-3">
				<ul class="nav navbar-nav">
					<li><a href="#">History</a></li>
					
					<!--<li><a href="#">Add new Machine</a></li>-->
				</ul>
			</div>
			<div class="col-9">
				<div class="text-center">
					<h3>Open Ticket</h3>
					<div class="col-7">
						
					<table class="table">
						<tr>
							<th>Name:</th>
							<td><?php echo $name;?></td>
							<th>Location :</th>
							<td><?php echo $location;?></td>
						</tr>
						<tr>
							<th>Note:</th>
							<td><?php echo $note;?></td>
							<th>Request date:</th>
							<td><?php echo $date1;?></td>
						</tr>
					</table>
					<div class="col-6">
						<form class="form-inline" method="POST">
							
							<div class="form-group">
								<label for="emp" class="col-auto">Select Employee </label>
							<select class="form-control" name="emp" id="emp">
								<?php 
                                 foreach ($empl as $key) {
                                 	echo '<option value='.$key['email'].'>'.$key['name'].'</option>';
                                 }
								?>
							</select>

							<div class="form-group">
								<input type="submit" name="sub" class="btn btn-info fom" value="Open Ticket ">
							</div>
						</div>
								
							
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<script src="../../../js/jquery.js"></script>
<script src="../../../js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>