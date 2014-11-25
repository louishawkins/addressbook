$('.edit-person-btn').click(function() {
	var personId = $(this).data('edit-address');
	var personName = $("#person-name-" + personId).text();
	var image = $("#person-image-" + personId).text();
	var phone = $("#person-ph_num-" + personId).text();
	var street = $("#person-street-" + personId).text();
	var city = $("#person-city-" + personId).text();
	var state = $("#person-state-" + personId).text();
	var zip = $("#person-zip-" + personId).text();

	$("#editName").text(personName);
	$("#editName-value").val(personName);
	$("#editImage").text(image);
	$("#editPhone").val(phone);
	$("#editStreet").val(street);
	$("#editCity").val(city);
	$("#editState").val(state);
	$("#editZip").val(zip);
	$("#editAddressModal").modal();
});