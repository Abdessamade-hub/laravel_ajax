
    <!-- Button trigger modal -->
      <!-- Modal -->
      <div class="modal fade" id="modal_create_student" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" >Enter the informations of the new student</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="form_save_student">
                    @csrf
                        <div class="form-group">
                        <label>Cne</label>
                        <input type="text" class="form-control" name="cne" placeholder="Enter the cne">
                        </div>
                    
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="firstName" placeholder="Enter the First Name">
                        </div>
                    
                        <div class="form-group">
                            <label>Second Name</label>
                            <input type="text" class="form-control" name="secondName" placeholder="Enter the Second Name">
                        </div>
                    
                        <div class="form-group">
                            <label>Age</label>
                            <input type="text" class="form-control" name="age" placeholder="Enter the Age">
                        </div>
                        <div class="form-group">
                            <label>Speciality</label>
                            <input type="text" class="form-control" name="speciality" placeholder="Enter the Speciality">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="cancel_modal">Cancel</button>
                            <button type="submit" onclick="save_student()" class="btn btn-primary">Save</button>
                        </div>
                    
                </form>
            </div>

          </div>
        </div>
      </div>