<?php // include stuff ?>
<!DOCTYPE html>
<html>
<head>
	<title>Address Book</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
<div class="container">
<!-- header -->

	<div class="row" id="header">
		<div class="container">
			<h1>Address Book Application</h1>
			<p><a href="#addperson">Add Person</a></p>
		</div> <!-- header row container -->
	</div> <!-- header row div -->

<!-- main row here -->

	<div class="row" id="mainrow">
		<div class="container" id="main_container">
			<div class="row" id="first_row_cards">
			<div class="card" id="card1">
				<h2>Tor Coolguy</h2>
				<img src="img/me.jpg" height="40px" width="40px">
				<p>123 Fake St.</p>
				<p>Tuscon, AR 34345</p>
				<p><a href="#editperson">Edit Person</a></p>
			</div>
			<div class="card" id="card2">
				<h2>Tor Coolguy</h2>
				<img src="img/me.jpg" height="40px" width="40px">
				<p>123 Fake St.</p>
				<p>Tuscon, AR 34345</p>
				<p><a href="#editperson">Edit Person</a></p>
			</div>
			</div> <!-- first row cards div -->
			<div class="row" id="second_row_cards">
				<div class="card" id="card3">
					<h2>Tor Coolguy</h2>
					<img src="img/me.jpg" height="40px" width="40px">
					<p>123 Fake St.</p>
					<p>Tuscon, AR 34345</p>
					<p><a href="#editperson">Edit Person</a></p>
				</div>
				<div class="card" id="card4">
					<h2>Tor Coolguy</h2>
					<img src="img/me.jpg" height="40px" width="40px">
					<p>123 Fake St.</p>
					<p>Tuscon, AR 34345</p>
					<p><a href="#editperson">Edit Person</a></p>
				</div>
			</div> <!-- second row cards div -->
		</div> <!-- main container div -->
	</div> <!-- main row div -->
		
	
<!-- footer row here -->

	<div class="row " id="footer">
		<div class="container">
			<h3>Footer content goes here</h3>
		</div>
	</div>

</div> <!-- body container -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>