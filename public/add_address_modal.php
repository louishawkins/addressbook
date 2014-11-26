
<!-- begin add address modal -->
<div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModal">Add New Contact</h4>
      </div> <!-- modal header -->
        <!-- MODAL BODY WITH FORM -->
      <div class="modal-body">
        <form class="form-horizontal" role="form" method="POST" action="/index.php" id="add_address_form">
              <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" placeholder="John Doe">
                </div>
              </div>
              <div class="form-group">
                <label for="phone" class="col-sm-2 control-label">Phone #</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="ph_num" name="ph_num" placeholder="(210) 555-6793">
                </div>
              </div>
              <div class="form-group">
                <label for="street" class="col-sm-2 control-label">Street</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="street" name="street" placeholder="123 Fake Street">
                </div>
              </div>
               <div class="form-group">
                <label for="city" class="col-sm-2 control-label">City</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="city" name="city" placeholder="Fake City">
                </div>
              </div>
              <div class="form-group">
                <label for="state" class="col-sm-2 control-label">State</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="state" name="state" placeholder="Texas">
                </div>
              </div>
              <div class="form-group">
                <label for="zip" class="col-sm-2 control-label">Zip Code</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="zip" name="zip" placeholder="78223">
                </div>
              </div>
      </div> <!-- modal body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Add Contact</button>
      </div> <!-- modal-footer -->
        </form>
    </div> <!-- modal-content -->
  </div> <!-- modal-dialogue -->
</div> <!-- master modal-div -->
<!-- end MODAL -->