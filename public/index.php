<?php 
require 'includes/model.class.php'; //model
include 'add_address_modal.php'; //add address modal
include 'edit_contact_modal.php'; //edit contact modal
?>

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
		<div class="container" id="header-container">
			<h1>Address Book Application</h1>
			<p id="add_person_link"><a href="#" data-toggle="modal" data-target="#addContactModal"><span class="glyphicon glyphicon-plus"></span>Add Contact</a></p>
		</div> <!-- header row container -->
	</div> <!-- header row div -->

<!-- main row here -->

	<div class="row" id="mainrow">
		<div class="container main_container">
			<?php include_once 'address_cards.php'; ?>
		</div> <!-- main container div -->
	</div> <!-- main row div -->

<!-- footer row here

	<div class="row " id="footer">
		<div class="container">
			<h3>Footer content goes here</h3>
		</div>
	</div>
-->
</div> <!-- body container -->

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/edit-contact-modal-binding.js"></script>
	<script type="text/javascript">
		$('#remove-person').click(function() {

			$(".confirm").confirm({
			    text: "Are you sure you want to delete this person?",
			    title: "Confirmation required",
			    confirm: function(button) {
			        var removeId = $(this).attr("value");
		  			console.log(removeId);
			    },
			    cancel: function(button) {
			        // do something
			    },
			    confirmButton: "Yes I am",
			    cancelButton: "No",
			    post: true
			});
		});		
	</script>
</body>
</html>