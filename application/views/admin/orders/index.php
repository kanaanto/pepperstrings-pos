<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

            <div class="content-wrapper">
                <section class="content-header">
                    <?php echo $pagetitle; ?>
                    <?php echo $breadcrumb; ?>
                </section>

                <section class="content">
                    <div class="row">
					                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-aqua">
                                <span class="info-box-icon "><i class="fa fa-dot-circle-o"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">All Tables</span>
                                    <span class="info-box-number">30<?php //echo $count_tables; ?></span>
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
                                    <span class="info-box-number">20</span>
                                </div>
                            </div>
                        </div>
						
                        
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-yellow">
                                <span class="info-box-icon"><i class="fa fa-check"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Occupied and Paid</span>
                                    <span class="info-box-number">6</span>
                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="row">
                       

                        <div class="col-md-4">
                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Table 1A</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="text-center"><strong>Occupied and unpaid</strong></p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-md-4">
                            <div class="box box-success">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Table 2A</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="text-center"><strong>Vacant</strong></p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-md-4">
                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Table 3A</h3>
                                    <div class="box-tools pull-right">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="text-center"><strong>Occupied and unpaid</strong></p>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="col-md-4">
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
                        </div>
                    </div>
                </section>
            </div>
