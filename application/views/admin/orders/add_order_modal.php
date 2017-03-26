<!-- Add order modal -->
	<div class="modal fade" id="add_order_modal" tabindex="-1" role="dialog" aria-labelledby="add_order_modal">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="add_order_modal">Add Order for Table 1A</h4>
		  </div>
		  <div class="modal-body">
				<table class="table table-hover table-bordered order_list_table">
				  <thead>
				  <tr>
					<th>Qty</th>
					<th>Item</th>
					<th>Unit Price</th>
					<th>Amt</th>
					<th>Action</th>
				  </tr>
				  </thead>
				  <tbody>
				  <tr>
					
					<td>1</td>
					<td>SMG-LGHT</td>
					<td>50</td>
					<td>50</td>
					<td><a href="#"><span class="fa fa-edit"></span></a><a href="#">&nbsp;&nbsp;<span class="fa fa-trash"></span></a></td>
				  </tr>
				  
				  </tbody>

				</table><hr/>
			 <form class="form-horizontal">
			  <div class="box-body col-md-8">
				<div class="form-group">
				  <label for="add_order_category" class="col-sm-2 control-label">Category:</label>
				  <div class="col-sm-10">
					<select id="add_order_category" class="form-control select2">
					  <option selected="selected">Rice Meals</option>
					  <option>Appetizers</option>
					  <option>KJ Drinks</option>
					</select>
				  </div>
				</div>
				<div class="form-group">
				  <label for="add_order_product" class="col-sm-2 control-label">Product:</label>
				  <div class="col-sm-10">
					<select id="add_order_product" class="form-control select2">
					  <option selected="selected">Tofu Mushroom - P89.00</option>
					  <option>Sisig - P89.00</option>
					  <option>Chopsuey - P89.00</option>
					  <option>Friskies - P129.00</option>
					</select>
				  </div>
				</div>
				<div class="form-group">
				  <label for="add_order_qty" class="col-sm-2 control-label">Quantity:</label>
				  <div class="col-sm-10">
					<input type="number" class="form-control" id="add_order_qty" value="1">
				  </div>
				</div>
				<div class="form-group">
				  <label for="add_order_amt" class="col-sm-2 control-label">Amount:</label>
				  <div class="col-sm-10">
					<input type="number" class="form-control" id="add_order_amt" disabled="disabled" value="129.00">
				  </div>
				</div>
			  </div>
			  <!-- /.box-body -->
			  <div class="add_order_button pull-right box-footer col-md-3">
				<button type="submit" class="btn btn-info">Add Order</button>
				<div class="clearfix"></div>
				<label for="add_order_stat" class="col-sm-2 control-label">Status:</label>
				<div class="clearfix"></div>
				<div class="form-group" id="add_order_stat">
				  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" checked>
                      Unpaid
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" >
                      Paid
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      On The House
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                      Salary Deduction
                    </label>
                  </div>
                </div>
				
				
			  </div>
			  <!-- /.box-footer -->
			</form>   
		  </div>
		  <div class="clearfix"></div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<button type="button" class="btn btn-danger">Save Orders</button>
		  </div>
		</div>
	  </div>
	</div>
	</div>