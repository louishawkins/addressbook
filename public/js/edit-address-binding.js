$('.edit-person-btn').click(function() {
	var personId = $(this).data('edit-address');
	var personName = $("#person-name-" + personId).text();
	var phone = $("#person-phone-" + personId).text();
	var street = $("#person-street-" + personId).text();
	var city = $("#person-city-" + personId).text();
	var state = $("#person-state-" + personId).text();
	var zip = $("#person-zip-" + personId).text();

	$("#edit-person-name").text(personName);
	$("#editName").val(personName);
	$("#editPhone").val(phone);
	$("#editStreet").val(street);
	$("#editCity").val(city);
	$("#editState").val(state);
	$("#editZip").val(zip);

	var url = "edit_address.html";
	$(location).attr('href', url);
});