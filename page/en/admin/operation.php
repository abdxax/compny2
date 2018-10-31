<?php
session_start();
require "../../connection/ope.php";
$db=new comp2();
$dep=$db->getDepartemt();

if (isset($_POST['sub'])) {
	$PHASES=$_POST['PHASES'];
	$VOLT=$_POST['VOLT'];
	$AMPS=$_POST['AMPS'];
    $P=$_POST['P'];
    $RPM=$_POST['RPM'];
    $PFCOS=$_POST['PFCOS'];
    $CYCLE=$_POST['CYCLE'];
    $MCC=$_POST['MCC'];
    $SERIALMODELNO=$_POST['SERIALMODELNO'];
    $TYPE=$_POST['TYPE'];
    $YEAR_OF_INSTALLATION=$_POST['YEAR_OF_INSTALLATION'];
    $MANUFACTURE=$_POST['MANUFACTURE'];
    $YEAR_OF_MANUFACTURE=$_POST['YEAR_OF_MANUFACTURE'];
    $id=$_SESSION['equ_ons'];
    $time=date("Y-m-d");
    $_SESSION['equ_ons']=$id;
    $db->addOper($id,$PHASES,$VOLT,$AMPS,$P,$RPM,$PFCOS,$CYCLE,$MCC,$SERIALMODELNO,$TYPE,$YEAR_OF_INSTALLATION,$MANUFACTURE,$YEAR_OF_MANUFACTURE,$time);

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
						<input type="text" name="PHASES" class="form-control" placeholder="PHASES">
					</div>
					<div class="form-group">
						<input type="text" name="VOLT" class="form-control" placeholder="VOLT ( V)">
					</div>
					<div class="form-group">
						<input type="text" name="AMPS" class="form-control" placeholder="AMPS ( I )">
					</div>

					<div class="form-group">
						<input type="text" name="P" class="form-control" placeholder="P (KW)">
					</div>

					<div class="form-group">
						<input type="text" name="RPM" class="form-control" placeholder="R.P.M / MIN">
					</div>

					<div class="form-group">
						<input type="text" name="PFCOS" class="form-control" placeholder="P . F COS ø">
					</div>

					<div class="form-group">
						<input type="text" name="CYCLE" class="form-control" placeholder="CYCLE ( HZ )">
					</div>

					<div class="form-group">
						<input type="text" name="MCC" class="form-control" placeholder="MCC  NO.">
					</div>

					<div class="form-group">
						<input type="text" name="SERIALMODELNO" class="form-control" placeholder="SERIAL/MODEL NO ">
					</div>

					<div class="form-group">
						<input type="text" name="TYPE" class="form-control" placeholder="TYPE">
					</div>

					<div class="form-group">
						<input type="text" name="YEAR_OF_INSTALLATION" class="form-control" placeholder="YEAR OF INSTALLATION">
					</div>

					<div class="form-group">
						<input type="text" name="MANUFACTURE" class="form-control" placeholder="MANUFACTURE">
					</div>

					<div class="form-group">
						<input type="text" name="YEAR_OF_MANUFACTURE" class="form-control" placeholder="YEAR OF MANUFACTURE ">
					</div>
					
					<div class="form-group">
						<input type="submit" name="sub" class="btn btn-save" value="Add Operation">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<script src="../../js/../bootstrap.js"></script>
<script src="../../js/../jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>