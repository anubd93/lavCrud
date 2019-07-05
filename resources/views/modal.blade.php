<!-- Add Modal -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">Add New Member</h4>
			</div>
			<div class="modal-body">
				{!! Form::open(['url' => 'save']) !!}
			    	<div class="form-group">
						<div class="row">
				    		<div class="col-md-2" style="margin-top:7px;">
				    			{!! Form::label('group_id', 'Group ID') !!}
				    		</div>
				    		<div class="col-md-10">
				    			{!! Form::text('group_id', '', ['class' => 'form-control', 'placeholder' => 'Group ID', 'required']) !!}
				    		</div>
				    	</div>
			    	</div>
			    	<div class="form-group">
			    		<div class="row">
				    		<div class="col-md-2" style="margin-top:7px;">
				    			{!! Form::label('name', 'Name') !!}
				    		</div>
				    		<div class="col-md-10">
				    			{!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Input Name', 'required']) !!}
				    		</div>
				    	</div>
			    	</div>
			    	<div class="form-group">
			    		<div class="row">
				    		<div class="col-md-2" style="margin-top:7px;">
				    			{!! Form::label('tbl_name', 'Table Name') !!}
				    		</div>
				    		<div class="col-md-10">
				    			{!! Form::text('tbl_name', '', ['class' => 'form-control', 'placeholder' => 'Input Table Name', 'required']) !!}
				    		</div>
				    	</div>
			    	</div>
			    	<div class="form-group">
			    		<div class="row">
				    		<div class="col-md-2" style="margin-top:7px;">
				    			{!! Form::label('status', 'Status') !!}
				    		</div>
				    		<div class="col-md-10">
				    			{!! Form::text('status', '', ['class' => 'form-control', 'placeholder' => 'Input Status', 'required']) !!}
				    		</div>
				    	</div>
			    	</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
				<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
