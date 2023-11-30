<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - How To Print A Document</h3>
		<hr style="border-top:1px dotted #ccc;" />
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><span class="glyphicon glyphicon-plus"></span> Add Product</button>
		<br /><br />
		<a href="print.php" target="_blank" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> Print</a>
		<br />
		<br />
		<table class="table table-bordered">
			<thead class="alert-success">
				<tr>
					<th>Product Name</th>
					<th>Price</th>
					<th>Qty</th>
					<th>Data Added</th>
				</tr>
			</thead>
			<tbody style="background-color:#fff;">
				<?php
					require 'conn.php';
					
					$query = $conn->query("SELECT * FROM `product`");
					while($fetch = $query->fetch_array()){
						
				?>
				
				<tr>
					<td><?php echo $fetch['pname']?></td>
					<td><?php echo $fetch['price']?></td>
					<td><?php echo $fetch['quantity']?></td>
					<td><?php echo $fetch['date_added']?></td>
				</tr>
				
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form action="save_query.php" method="POST">
				<div class="modal-content">
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Product Name</label>
								<input type="text" name="pname" class="form-control"/>
							</div>
							<div class="form-group">
								<label>Price</label>
								<input type="number" name="price" class="form-control"/>
							</div>
							<div class="form-group">
								<label>Qty</label>
								<input type="number" name="qty" class="form-control"/>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</html>