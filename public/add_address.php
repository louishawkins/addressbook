<?php require_once 'includes/model.class.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>Address Book</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row" id="form_row">
		<div class="container" id="add_address_form_container">
			<form class="form-horizontal" role="form" method="POST" action="/add_address.php" id="add_address_form">
			  <div class="form-group">
			    <label for="name" class="col-sm-2 control-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="name" placeholder="John Doe">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="phone" class="col-sm-2 control-label">Phone #</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="phone" placeholder="(210) 555-6793">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="street" class="col-sm-2 control-label">Street</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="street" placeholder="123 Fake Street">
			    </div>
			  </div>
			   <div class="form-group">
			    <label for="city" class="col-sm-2 control-label">City</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="city" placeholder="Fake City">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="state" class="col-sm-2 control-label">State</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="state" placeholder="Texas">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="zip" class="col-sm-2 control-label">Zip Code</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="zip" placeholder="78223">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Add Contact</button>
			    </div>
			  </div>
			</form>
		</div> <!-- add address form container -->
	</div> <!-- form row div -->
</div> <!-- body container -->
</body>
</html>