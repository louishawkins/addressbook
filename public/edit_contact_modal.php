<!-- begin edit address modal -->
<div class="modal fade" id="editContactModal" tabindex="-1" role="dialog" aria-labelledby="editAddressModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!--<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>-->
        <h4 class="modal-title" id="editName"></h4>
      </div> <!-- modal header -->
        <!-- MODAL BODY WITH FORM -->
      <div class="modal-body">
          <div class="row">
            <div class="col-md-2">
              <a href="#changeimage">Change Image</a>
              <img id="editImage" src="img/default" class="img-circle">
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
        <button type="submit" class="btn btn-success">Save</button>
        </form>
        <form method="GET" action="/index.php">
          <button id="remove-person" name="removeId" type="submit" class="btn btn-danger remove-person-btn">Remove Person</button>
        </form>
      </div> <!-- modal-footer -->

    </div> <!-- modal-content -->
  </div> <!-- modal-dialogue -->
</div> <!-- master modal-div -->
<!-- end MODAL -->
