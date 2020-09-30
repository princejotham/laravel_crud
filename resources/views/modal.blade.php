<!-- Add Modal -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Add New Member</h4>
			</div>
			<div class="modal-body">
				<form action="{{ URL::to('save') }}" id="addForm">
			    	<div class="form-group">
						<div class="row">
				    		<div class="col-md-2" style="margin-top:7px;">
				    			<label for="firstname">Firstname</label>
				    		</div>
				    		<div class="col-md-10">
				    			<input type="text" name="firstname" class="form-control" placeholder="Input Firstname" required>
				    		</div>
				    	</div>
			    	</div>
			    	<div class="form-group">
			    		<div class="row">
				    		<div class="col-md-2" style="margin-top:7px;">
				    			<label for="lastname">Lastname</label>
				    		</div>
				    		<div class="col-md-10">
				    			<input type="text" name="lastname" class="form-control" placeholder="Input Lastname" required>
				    		</div>
				    	</div>
			    	</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Edit Member</h4>
			</div>
			<div class="modal-body">
				<form action="{{ URL::to('update') }}" id="editForm">
					<input type="hidden" id="memid" name="id">
			    	<div class="form-group">
						<div class="row">
				    		<div class="col-md-2" style="margin-top:7px;">
				    			<label for="firstname">Firstname</label>
				    		</div>
				    		<div class="col-md-10">
				    			<input type="text" name="firstname" id="firstname" class="form-control">
				    		</div>
				    	</div>
			    	</div>
			    	<div class="form-group">
			    		<div class="row">
				    		<div class="col-md-2" style="margin-top:7px;">
				    			<label for="lastname">Lastname</label>
				    		</div>
				    		<div class="col-md-10">
				    			<input type="text" name="lastname" id="lastname" class="form-control">
				    		</div>
				    	</div>
			    	</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
				<button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> Update</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Delete Member</h4>
			</div>
			<div class="modal-body">
				<h4 class="text-center">Are you sure you want to delete Member?</h4>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
				<button type="button" id="deletemember" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
			</div>
		</div>
	</div>
</div>