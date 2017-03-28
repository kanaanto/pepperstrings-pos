<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

            <div class="content-wrapper">
                <section class="content-header">
                    <?php echo $pagetitle; ?>
                    <?php echo $breadcrumb; ?>
                </section>

                <section class="content">
				<!--div class="alert alert-error">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <h4>Error!</h4>
				  TO DO: Load error messages
				</div-->
				<!--div class="alert alert-success">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <h4>Success!</h4>
				  TO DO: Load success messages
				</div-->
                    <div class="row">
					                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-aqua">
                                <span class="info-box-icon "><i class="fa fa-dot-circle-o"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">All Tables</span>
                                    <span class="info-box-number">10<?php //echo $count_tables; ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-green">
                                <span class="info-box-icon"><i class="fa fa-plus"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Vacant</span>
                                    <span class="info-box-number">4</span>
									
                                </div>
                            </div>
                        </div>
						<div class="clearfix visible-sm-block"></div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-red">
                                <span class="info-box-icon"><i class="fa fa-times"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Occupied and Unpaid</span>
                                    <span class="info-box-number">2</span>
                                </div>
                            </div>
                        </div>
						
                        
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-yellow">
                                <span class="info-box-icon"><i class="fa fa-check"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Occupied and Paid</span>
                                    <span class="info-box-number">2</span>
                                </div>
                            </div>
                        </div>
						<div class="col-xs-12">
							<div class="box-tools pull-right">
								<button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#add_table_modal"><i class="fa fa-plus"></i>&nbsp;Add New Table</button>
							</div>
						</div>
                    </div>

						<br/>
					
                    <div class="row"><!-- Table List -->
                        <div class="col-md-6">
                            <div class="box box-warning">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Table 1A  &nbsp;
									<button type="button" class="btn btn-warning btn-xs" data-dismiss="modal">Vacate</button> <!-- Should only be visible when all orders are paid-->
									</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
											<table class="table table_borderless table-hover order_list_table">
											  <thead>
												  <tr>
													<th>Qty</th>
													<th>Item</th>
													<th>Unit Price</th>
													<th>Amt</th>
													<th>Status</th>
													<th>Action</th>
													<th>Emp No.</th>
												  </tr>
											  </thead>
											  <tbody>
												  <tr>
													
													<td>1</td>
													<td>SMG-LGHT</td>
													<td>50</td>
													<td>50</td>
													<td><span class="label label-warning">OTH</span></td>
													<td>
														<a href="#"><span class = "fa fa-edit"></span></a>&nbsp;&nbsp;
														<a href="#delete_order_modal" data-toggle="modal"><span class = "fa fa-trash"></span></a>
													</td>
													<td><a href="#" title="Kana Antonio">E001</a></td>
												  </tr>
												  <tr>
													<td>2</td>
													<td>SISIG-MEAL</td>
													<td>89</td>
													<td>158</td>
													<td><span class="label label-success">Paid</span></td>
													<td><a href="#"><span class = "fa fa-edit"></span></a><a href="#">&nbsp;&nbsp;<span class = "fa fa-trash"></span></a></td>
													<td>E001</td>
												  </tr>
												  <tr>
													<td>2</td>
													<td>BKT (SMG-LGHT, RD-HRSE, SMG-APL)</td>
													<td>320</td>
													<td>640</td>
													<td><span class="label label-success">Paid</span></td>
													<td><a href="#"><span class = "fa fa-edit"></span></a><a href="#">&nbsp;&nbsp;<span class = "fa fa-trash"></span></a></td>
													<td>E003</td>
												  </tr>
												  <tr>
													
													<td>5</td>
													<td>RD-HRSE</td>
													<td>50</td>
													<td>250</td>
													<td><span class="label label-warning">SD</span></td>
													<td>
														<a href="#"><span class = "fa fa-edit"></span></a>&nbsp;&nbsp;
														<a href="#delete_order_modal" data-toggle="modal"><span class = "fa fa-trash"></span></a>
													</td>
													<td>E002</td>
												  </tr>
											  </tbody>
											</table>

											<hr/>

											<div class="total_amt_div">  
												<span class="total_amt_lbl">Total Amount:</span>
												<!-- 
												RED: Some orders are unpaid
												GREEN: All orders are paid
												-->
												<span class="total_amt_paid" id="ta_t1"> 1,098.00</span>
											</div>
												
											<div class="clearfix"></div>
											<div class="box-tools pull-left">
												<button type="button" class="btn btn-info" data-toggle="modal" data-target="#add_order_modal"><i class="fa fa-plus"></i>&nbsp;Add Order</button>
											</div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

						<div class="col-md-6">
                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Table 3A &nbsp;
									<button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#move_table_modal">Move</button> <!-- Should only be visible when some orders are still unpaid-->
									
									</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
									<div class="row">
                                        <div class="col-md-12">
											<table class="table table_borderless table-hover order_list_table">
											  <thead>
												  <tr>
													<th>Qty</th>
													<th>Item</th>
													<th>Unit Price</th>
													<th>Amt</th>
													<th>Status</th>
													<th>Action</th>
													<th>Emp No.</th>
												  </tr>
											  </thead>
											  <tbody>
												  <tr>
													
													<td>1</td>
													<td>SMG-LGHT</td>
													<td>50</td>
													<td>50</td>
													<td><span class="label label-danger">Unpaid</span></td>
													<td>
														<a href="#"><span class = "fa fa-edit"></span></a>&nbsp;&nbsp;
														<a href="#delete_order_modal" data-toggle="modal"><span class = "fa fa-trash"></span></a>
													</td>
													<td>E003</td>
												  </tr>
												  <tr>
													<td>2</td>
													<td>TOFU-MUSH-MEAL</td>
													<td>89</td>
													<td>158</td>
													<td><span class="label label-danger">Unpaid</span></td>
													<td><a href="#"><span class = "fa fa-edit"></span></a><a href="#">&nbsp;&nbsp;<span class = "fa fa-trash"></span></a></td>
													<td>E003</td>
												  </tr>
												  <tr>
													<td>1</td>
													<td>MILK-SHK</td>
													<td>50</td>
													<td>50</td>
													<td><span class="label label-success">Paid</span></td>
													<td>
														<a href="#"><span class = "fa fa-edit"></span></a>&nbsp;&nbsp;
														<a href="#delete_order_modal" data-toggle="modal"><span class = "fa fa-trash"></span></a>
													</td>
													<td>E004</td>
												  </tr>
											  </tbody>
											</table>

											<hr/>
											<div class="total_amt_div">  
												<span class="total_amt_paid_lbl">Paid:</span>
												<span class="total_amt_paid" id="ta_t1"> 50.00</span>
											</div>
											<div class="total_amt_div">  
												<span class="total_amt_lbl">Balance:</span>
												<span class="total_amt_unpaid" id="ta_t1"> 208.00</span>
											</div>
												
											<div class="clearfix"></div>
											<div class="box-tools pull-left">
												<button type="button" class="btn btn-info" data-toggle="modal" data-target="#add_order_modal"><i class="fa fa-plus"></i>&nbsp;Add Order</button>
											</div>
											<!-- Hide when all orders are paid already -->
											<div class="box-tools pull-right">
												<button type="button" class="btn btn-success" data-toggle="modal" data-target="#bill_out_modal"><i class="fa fa-credit-card"></i>&nbsp;Bill-Out</button>
											</div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php foreach ($table_list->result() as $row) { ?>
						<div class="col-md-6">
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title"><?=$row->table_id;?></h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
									<div class="box-tools pull-left">
										<button type="button" class="btn btn-info" data-toggle="modal" data-target="#add_order_modal"><i class="fa fa-plus"></i>&nbsp;Add Order</button>
									</div>
                                </div>
                            </div>
                        </div>
						<?php } ?>
						
						<!--div class="col-md-6">
                            <div class="box box-warning">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Table 3B</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="text-center"><strong>Occupied and paid</strong></p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div-->
                    </div>
                </section>
				<!-- Add order modal --><?=$add_order_modal?>
				<!-- Bill out modal --><?=$bill_out_modal?>
				<!-- Move to another table modal --><?=$add_move_table_modal?>
				<!-- Move to another table modal --><?=$delete_order_modal?>
            </div>
