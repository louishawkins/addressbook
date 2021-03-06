$('.edit-person-btn').click(function() {
	var personId = $(this).data('edit-person');
	var addressId = $(this).data('edit-address');
	var personName = $("#person-name-" + personId).text();
	var image = $("#person-image-" + personId).attr("src");
	var phone = $("#person-ph_num-" + personId).text();
	var street = $("#person-street-" + personId).text();
	var city = $("#person-city-" + personId).text();
	var state = $("#person-state-" + personId).text();
	var zip = $("#person-zip-" + personId).text();

	$("#editName").text(personName);
	$("#editName-value").val(personName);
	$("#contact-image").attr("src", image);
	$("#editPhone").val(phone);
	$("#editStreet").val(street);
	$("#editCity").val(city);
	$("#editState").val(state);
	$("#editZip").val(zip);
	$("#update-person-id").val(personId);
	$("#update-address-id").val(addressId);
	$("#remove-person-id").val(personId);
	$("#remove-address-id").val(addressId);
	$("#submit-img").val(personId);
	$("#editContactModal").modal();
});

$("#remove-form").submit(function(e) {
	if(!confirm('Are you sure you want to delete this contact?')) {
		e.preventDefault();
	}
	return true;
});