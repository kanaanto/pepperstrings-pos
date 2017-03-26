<!-- Only list orders that are still unpaid -->
	<div class="modal fade" id="bill_out_modal" tabindex="-1" role="dialog" aria-labelledby="bill_out_modal">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="bill_out_modal">Bill Out for Table 1A</h4>
		  </div>
		  <div class="modal-body">
			<table class="table table_borderless table-hover order_list_table">
			  <thead>
				  <tr>
					<th>Qty</th>
					<th>Item</th>
					<th>Unit Price</th>
					<th>Amt</th>
					<th>Status</th>
				  </tr>
			  </thead>
			  <tbody>
				  <tr>
					
					<td>1</td>
					<td>SMG-LGHT</td>
					<td>50</td>
					<td>50</td>
					<td><span class="label label-danger">Unpaid</span></td>
				  </tr>
				  <tr>
					<td>2</td>
					<td>TOFU-MUSH-MEAL</td>
					<td>89</td>
					<td>158</td>
					<td><span class="label label-danger">Unpaid</span></td>
				  </tr>
			  </tbody>
			</table>
			<div class="row">
				<div class="pull-right col-md-6">
					<div class="total_amt_div">  
						<span class="total_amt_lbl">Balance:</span>
						<span class="total_amt_unpaid" id="ta_t1"> 208.00</span>
					</div>
					
					<div class="total_amt_div">  
						<span class="total_amt_lbl">Change:</span>
						<span class="total_amt_paid" id="ta_t1"> 42.00</span>
					</div>
				</div>
				<div class="pull-left col-md-6">
					<div class="row">
						<span class="col-md-7 total_amt_lbl">Amount Received:</span>
						<div class="col-md-5 total_amt_unpaid" id="ta_t1"><input type="number" class="form-control" id="add_order_amt" value="250.00" width="50%"></div>
					</div>
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>