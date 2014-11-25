<!-- begin edit person modal -->
<div class="modal fade" id="editPersonModal" tabindex="-1" role="dialog" aria-labelledby="editPersonModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModal">Edit Person</h4>
      </div> <!-- modal header -->
        <!-- MODAL BODY WITH FORM -->
      <div class="modal-body">
          <div class="row">
            <div class="col-md-2">
              <a href="#changeimage">Change Image</a>
              <img src="img/me.jpg" class="img-circle">
            </div>
            <div class="col-md-4 col-md-offset-2">
                <form id="edit-person-form" class="form-inline" role="form" method="POST" target="index.php">
                  <div class="form-group">
                    <div class="input-group">
                      <label class="sr-only" for="name">Name</label>
                      <input type="text" class="form-control" id="name" value="Tor Coolguy">
                    </div>
                  </div>
                  <button type="button" class="btn btn-danger">Remove Person</button>
            </div> 
          </div> <!--row-->
      </div> <!-- modal body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success">Save</button>
      </div> <!-- modal-footer -->
        </form>
    </div> <!-- modal-content -->
  </div> <!-- modal-dialogue -->
</div> <!-- master modal-div -->
<!-- end MODAL -->