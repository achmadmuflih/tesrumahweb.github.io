
  
<div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto">
  	<div class="row">
  		<div class="col-6">
  			<h5 class="mb-3">Data User</h5>
  		</div>
  		<div class="col-6">
  			<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal" style="float: right;"><i class="fa fa-plus"></i> Add Data</button>
  		</div>
  	</div>
  	<table class="table table-striped">
	  <thead>
	    <tr>
	      <th scope="col">No</th>
	      <th scope="col">Name</th>
	      <th scope="col">Email</th>
	      <th scope="col">Action</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row">1</th>
	      <td>Achmad Muflih</td>
	      <td>achmadmuflih97@gmail.com</td>
	      <td>
	      	<a href="#" class="badge badge-primary badge-pill">Edit</a>
	      	<a href="#" class="badge badge-danger badge-pill">Delete</a>
	      </td>
	    </tr>
	  </tbody>
	</table>
</div>





<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new user</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="name" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="date" class="col-form-label">Date of birth</label>
            <input type="date" class="form-control" name="date">
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label">Email</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label for="password" class="col-form-label">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save</button>
      </div>
    </div>
  </div>
</div>