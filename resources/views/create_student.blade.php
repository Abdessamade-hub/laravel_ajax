{{-- 
    <div class="card mb-3">
        
        <div class="card-body">
          <h5 class="card-title">Enter the informations of the new student</h5>

                <form action=" {{ url('/store') }} " method="POST">
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
                    
                        <div class="form-group mt-4 ">
                            <input type="text" class="btn btn-warning"  value="RESET">
                            <input type="submit" class=" btn btn-success"  value="SAVE">        
                        </div>
                </form>
        </div>
    </div> --}}
