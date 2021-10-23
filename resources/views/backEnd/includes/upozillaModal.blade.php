 <!--Add Upozilla Modal --> 
 <div class="modal fade" id="addUpozilla" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Upozilla Info</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		  {{ Form::open(['route'=>'upozillaSave','method'=>'POST']) }}
		  <div class="mb-3 row">
			<label for="staticEmail"  class="col-sm-2 col-form-label">Zilla</label>
			<div class="col-sm-10">
			  <input type="text" readonly class="form-control-plaintext text-success" id="staticEmail" value="TANGAIL">
			</div>
		  </div>
		  <div class="mb-3 row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Upozilla</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="upozilla">
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