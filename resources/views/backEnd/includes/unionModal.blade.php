 <!--Add Union Modal --> 
 <div class="modal fade" id="addUnion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="exampleModalLabel">Union Info</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		  {{ Form::open(['route'=>'unionSave','method'=>'POST']) }}
		  
            <div class="mb-3 row">
			<label for="staticEmail"  class="col-sm-2 col-form-label">Upozilla</label>
			<div class="col-sm-10">
			   <select name="upozilla_id" class="chosen  form-control" class="container-fluid" id="">
                    <option value="">Select Upozilla</option> 
                        @foreach ($upozillas as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach  
               </select>
			</div>
		  </div>
		  <div class="mb-3 row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Union</label>
			<div class="col-sm-10">
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

  <style>
      .chosen-container{
          width: 100% !important;
      }
      .chosen-container-single{
          width: 100% !important;
      }
      .chosen-with-drop{
          width: 100% !important;
      }  
      .chosen-container-active{
          width: 100% !important;
      }
  </style>