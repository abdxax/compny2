<?php
session_start();
require "../../connection/ope.php";
$db=new comp2();

$equ=$db-> getAllDateApp($_SESSION['depart']);

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
				<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th>number</th>
						<th>Maintenance</th>
						<th>Note</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$td='';
                      foreach ($equ as $key) {
                      	$td=$db->getManint($key['id_type']);
                      	echo '
                         <tr>
                           <td><a href=opentic.php?id='.$key['id_requiest'].'>'.$key['name'].'</a></td>
                           <td>'.$key['equipment_on'].'</td>
                           <td>'.$td.'</td>
                           <td>'.$key['Note'].'</td>
                            <td>'.$key['craete_att'].'</td>
                         </tr>
                      	';
                      }
					?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</section>

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Open ticket</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="POST">
        	<div class="form-group">
        	<select>
        		<?php

        		?>
        	</select>
        	</div>
        	<div class="form-group">
        		
      
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <input type="submit" name="sub" class="btn btn-info" value="save">
          </form>
      </div>

    </div>
  </div>
</div>



<script src="../../../js/jquery.js"></script>
<script src="../../../js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>