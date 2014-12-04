<!-- begin edit address modal -->
<div class="modal fade" id="editContactModal" tabindex="-1" role="dialog" aria-labelledby="editAddressModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="editName"></h4>
      </div> <!-- modal header -->
        <!-- MODAL BODY WITH FORM -->
      <div class="modal-body">
          <div class="row">
            <div class="col-md-2">
              <img id="contact-image" height="150" width="150" class="img-circle">

              <!-- IMAGE UPLOAD FORM -->
              <form method="POST" action="index.php" enctype="multipart/form-data">
                <label for="uploadimg">Change picture: </label>
                <input type="file" id="uploadimg" name="uploadimg">
                <button id="submit-img" type="submit" name="submit-img">Set Picture</button>
              </form>

            </div>
          </div>
        <form class="form-horizontal" role="form" method="POST" action="/index.php" id="edit_contact_form">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="editName-value" name="editName">
                </div>
              </div>
              <div class="form-group">
                <label for="editPhone" class="col-sm-2 control-label">Phone #</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="editPhone" name="editPhone">
                </div>
              </div>
              <div class="form-group">
                <label for="street" class="col-sm-2 control-label">Street</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="editStreet" name="editStreet">
                </div>
              </div>
               <div class="form-group">
                <label for="city" class="col-sm-2 control-label">City</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="editCity" name="editCity">
                </div>
              </div>
              <div class="form-group">
                <label for="state" class="col-sm-2 control-label">State</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="editState" name="editState">
                </div>
              </div>
              <div class="form-group">
                <label for="zip" class="col-sm-2 control-label">Zip Code</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="editZip" name="editZip">
                </div>
              </div>
      </div> <!-- modal body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <input type="hidden" name="person_id" id="update-person-id">
        <input type="hidden" name="address_id" id="update-address-id">
        <button type="submit" id="update-person" name="update-person-id" class="btn btn-success">Save</button>
        </form>
        <form id="remove-form" name="remove-form" method="POST" action="index.php">
          <input type="hidden" name="act" value="run">
          <input type="hidden" name="person_id" id="remove-person-id">
          <input type="hidden" name="address_id" id="remove-address-id">
          <button id="remove-person" name="removeId" type="submit" class="btn btn-danger remove-person-btn">Delete Contact</button>
        </form>
      </div> <!-- modal-footer -->

    </div> <!-- modal-content -->
  </div> <!-- modal-dialogue -->
</div> <!-- master modal-div -->
<!-- end MODAL -->
