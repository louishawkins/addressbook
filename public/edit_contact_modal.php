<!-- begin edit address modal -->
<div class="modal fade" id="editAddressModal" tabindex="-1" role="dialog" aria-labelledby="editAddressModal" aria-hidden="true">
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
              <a href="#changeimage">Change Image</a>
              <img id="editImage" src="img/default" class="img-circle">
            </div>
          </div>
        <form class="form-horizontal" role="form" method="POST" action="/index.php" id="edit_contact_form">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="editName-value">
                </div>
              </div>
              <div class="form-group">
                <label for="editPhone" class="col-sm-2 control-label">Phone #</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="editPhone" value="(210) 555-6793">
                </div>
              </div>
              <div class="form-group">
                <label for="street" class="col-sm-2 control-label">Street</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="editStreet" value="123 Fake Street">
                </div>
              </div>
               <div class="form-group">
                <label for="city" class="col-sm-2 control-label">City</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="editCity" value="Fake City">
                </div>
              </div>
              <div class="form-group">
                <label for="state" class="col-sm-2 control-label">State</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="editState" value="Texas">
                </div>
              </div>
              <div class="form-group">
                <label for="zip" class="col-sm-2 control-label">Zip Code</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="editZip" value="78223">
                </div>
              </div>
      </div> <!-- modal body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger">Remove Person</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success">Save</button>
      </div> <!-- modal-footer -->
        </form>
    </div> <!-- modal-content -->
  </div> <!-- modal-dialogue -->
</div> <!-- master modal-div -->
<!-- end MODAL -->