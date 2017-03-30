<<<<<<< HEAD
<div class="modal fade" id="move_table_modal" tabindex="-1" role="dialog" aria-labelledby="move_table_modal">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title" id="move_table_modal">Move Table 1A</h4>
	  </div>
		<div class="modal-body col-md-12">
			<div class="col-md-6">
				<label>From Table:</label>
				<select class="form-control select2" disabled="disabled" >
				  <option selected="selected">1A</option>
				  <option>1B</option>
				  <option>1C</option>
				  <option>1D</option>
				  <option>1E</option>
				  <option>1F</option>
				  <option>1G</option>
				  <option>2A</option>
				  <option>2B</option>
				  <option>2C</option>
				</select>
			</div>
			<div class="col-md-6">
				<label>To Table:</label>
				<select class="form-control select2">
				  <option selected="selected">1B</option>
				  <option>1C</option>
				  <option>1D</option>
				  <option>1E</option>
				  <option>1F</option>
				  <option>1G</option>
				  <option>2A</option>
				  <option>2B</option>
				  <option>2C</option>
				</select>
			</div>
		</div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
		<button type="button" class="btn btn-primary">Move</button>
	  </div>
	</div>
  </div>
</div>

<div class="modal fade" id="add_table_modal" tabindex="-1" role="dialog" aria-labelledby="add_table_modal">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title" id="add_table_modal">Add New Table</h4>
	  </div>
	  <?=form_open('admin/orders/add_table'); ?>
		<div class="modal-body col-md-12">
			<div class="col-md-3">
				<label>Table Name:</label>	
			</div>
			<div class="col-md-6">
				<?php 
				$data = array(
						'name'          => 'table_name',
						'type'            => 'text',
						'class'         => 'form-control',
						'placeholder'     => 'Name'
				);

				echo form_input($data);
				?>
			</div>
		</div>
		
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<?php echo form_submit('table_submit', 'Create', 'class="btn btn-primary"'); ?>
		  </div>
	  <?=form_close();?>
	</div>
  </div>
=======
<div class="modal fade" id="move_table_modal" tabindex="-1" role="dialog" aria-labelledby="move_table_modal">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title" id="move_table_modal">Move Table 1A</h4>
	  </div>
		<div class="modal-body col-md-12">
			<div class="col-md-6">
				<label>From Table:</label>
				<select class="form-control select2" disabled="disabled" >
				  <option selected="selected">1A</option>
				  <option>1B</option>
				  <option>1C</option>
				  <option>1D</option>
				  <option>1E</option>
				  <option>1F</option>
				  <option>1G</option>
				  <option>2A</option>
				  <option>2B</option>
				  <option>2C</option>
				</select>
			</div>
			<div class="col-md-6">
				<label>To Table:</label>
				<select class="form-control select2">
				  <option selected="selected">1B</option>
				  <option>1C</option>
				  <option>1D</option>
				  <option>1E</option>
				  <option>1F</option>
				  <option>1G</option>
				  <option>2A</option>
				  <option>2B</option>
				  <option>2C</option>
				</select>
			</div>
		</div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
		<button type="button" class="btn btn-primary">Move</button>
	  </div>
	</div>
  </div>
</div>

<div class="modal fade" id="add_table_modal" tabindex="-1" role="dialog" aria-labelledby="add_table_modal">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title" id="add_table_modal">Add New Table</h4>
	  </div>
	  <?=form_open('admin/orders/add_table'); ?>
		<div class="modal-body col-md-12">
			<div class="col-md-3">
				<label>Table Name:</label>	
			</div>
			<div class="col-md-6">
				<?php 
				$data = array(
						'name'          => 'table_name',
						'type'            => 'text',
						'class'         => 'form-control',
						'placeholder'     => 'Name'
				);

				echo form_input($data);
				?>
			</div>
		</div>
		
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<?php echo form_submit('table_submit', 'Create', 'class="btn btn-primary"'); ?>
		  </div>
	  <?=form_close();?>
	</div>
  </div>
>>>>>>> 1e90f965980485a5e3c2a2f3f688902256a7f9a9
</div>