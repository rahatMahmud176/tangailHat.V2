 <!--Add Upozilla Modal --> 
 <div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Category Info</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body"> 
		  {{ Form::open(['route'=>'categorySave','method'=>'POST','enctype'=>'multipart/form-data']) }}
		  <div class="mb-3 row">
			<label for="staticEmail"  class="col-sm-4 col-form-label"> Category Image (100x100px)</label>
			<div class="col-sm-8">
			  <input type="file" name="img" class="from-control" id="">
			</div>
		  </div>
		  <div class="mb-3 row">
			<label for="inputPassword" class="col-sm-4 col-form-label">Category Name</label>
			<div class="col-sm-8">
			  <input type="text" class="form-control" name="name">
			</div>
		  </div>
		 
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		  <button type="submit" class="btn btn-primary">Save</button>
		  {{ Form::close() }}
		</div>
	  </div>
	</div>
  </div> 