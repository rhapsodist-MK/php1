<?php
    session_start();

    if(!isset($_SESSION["email"])){
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
	<?php require_once 'navbar.php'; ?>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>

			<div class="col-md-8" id="cart_msg">
				
			</div>

			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Cart Checkout</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2"><b>Action</b></div>
							<div class="col-md-2"><b>Product Image</b></div>
							<div class="col-md-2"><b>Product Name</b></div>
							<div class="col-md-2"><b>Price</b></div>
							<div class="col-md-2"><b>Quantity</b></div>
							<div class="col-md-2"><b>total</b></div>
						</div>
						<br>
						<div id="cart_list">
							
						</div>
						<!-- <div class="row">
							<div class="col-md-2">
								<div class="btn-group">
									<a href="#" class="btn btn-danger">
										<span class="glyphicon glyphicon-trash"></span>
									</a>
									<a href="#" class="btn btn-primary">
										<span class="glyphicon glyphicon-ok-sign"></span>
									</a>
								</div>
							</div>
							<div class="col-md-2">
								<img src="img/">
							</div>
							<div class="col-md-2">Product Name</div>
							<div class="col-md-2">
								<input type="text" class="form-control" value="5000" disabled>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control" value="1">
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control" value="5000" disabled>
							</div>
						</div> -->
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>


	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
</body>
</html>