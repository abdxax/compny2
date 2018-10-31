<?php
session_start();
require "../../connection/ope.php";
$db=new comp2();
$equ=$db-> getAllParts(1);

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
			<div class="col-12">
				
			</div>
			<div class="col-12">
				
			</div>
			<div class="col-3">
				<ul class="nav navbar-nav">
					<li><a href="#">Updater operation data</a></li>
					<li><a href="parts.php">parts</a></li>
					<li><a href="file.php">Files</a></li>
					<li><a href="history.php">History </a></li>
					<li><a href="#">print report </a></li>
					<!--<li><a href="#">Add new Machine</a></li>-->
				</ul>
			</div>

			<div class="col-8">
				<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="text-center"></h3>
			</div>
			<div class="col-12">
				<div class="col-6 offset-4">
					
					
					<div class="col-6">
						<a href="#" data-toggle="modal" data-target="#myModal">Add new Part </a>
					</div>
					
				</form>
				</div>
			</div>
			

			<div class="col-8">
				<table class="table">
					<thead>
						<tr>
							<th>ON</th>
							<th>part name</th>
							<th>file</th>
							
							
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
                              <td>'.$key['part_name'].'</td>
                              <td></td>
                              <td></td>

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




<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="POST">
        	<div class="form-group">
        		<input type="text" name="title" class="form-control" placeholder="Title">
        	</div>
        	<div class="form-group">
        		<textarea class="form-control" rows="5" placeholder="Note..."></textarea>
        	</div>
        	<div class="form-group">
        		<input type="file" name="fil" class="form-control" placeholder="File pdf jpg png ">
        	</div>
      
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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