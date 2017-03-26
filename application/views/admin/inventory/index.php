<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
            <div class="content-wrapper">
                <section class="content-header">
                    <?php echo $pagetitle; ?>
                    <?php echo $breadcrumb; ?>
                </section>

                <section class="content">
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Edit Item Info</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label for="item-name" class = "col-sm-3 control-label">Item Name:</label>
                                            <div class = "col-sm-9">
                                                <input type="text" class="form-control" id="item-name" value = "Red Horse">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="item-name" class = "col-sm-3 control-label">Beg Quantity</label>
                                            <div class = "col-sm-9">
                                                <input type="number" class="form-control" id="item-name" value = "10">
                                            </div>
                                        </div>
                                          <div class="form-group">
                                            <label for="item-name" class = "col-sm-3 control-label">In Quantity</label>
                                            <div class = "col-sm-9">
                                                <input type="number" class="form-control" id="item-name" value = "10">
                                            </div>
                                          </div>
                                        <div class="form-group">
                                            <label for="item-name" class = "col-sm-3 control-label">Out Quantity</label>
                                                <div class = "col-sm-9">
                                                    <input type="number" class="form-control" id="item-name" value = "10">
                                                </div>
                                          </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Box-->
                    <div class = "box box-danger">
                        <div class = "box-header with-border">
                            <div class = "col-sm-6">
                                <h4>From:</h4><input type="date" id = "date-from" class = "form-control" name="date-from">
                            </div>
                            <div class = "col-sm-6">
                                <h4>To:</h4><input type="date" id = "date-to" class = "form-control" name="date-to">
                            </div>
                        </div>
                        <div class = "box-body">
                            <div class = "row">
                                <div class = "col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="box box-solid box-primary">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Bar</h3>
                                        </div>
                                        <div class="box-body">
                                            <table id="" class="display" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>BEG</th>
                                                        <th class = "input-column">IN</th>
                                                        <th class = "input-column">OUT</th>
                                                        <th>END</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>BEG</th>
                                                        <th>IN</th>
                                                        <th>OUT</th>
                                                        <th>END</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <tr>
                                                        <td>Red Horse</td>
                                                        <td>10</td>
                                                        <td>10</td>
                                                        <td>15</td>
                                                        <td>5</td>
                                                        <td>
                                                            <a data-toggle="modal" data-target="#myModal">
                                                                <span class = "fa fa-edit">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>San Mig Light</td>
                                                        <td>30</td>
                                                        <td>15</td>
                                                        <td>43</td>
                                                        <td>2</td>
                                                        <td>
                                                            <a data-toggle="modal" data-target="#myModal">
                                                                <span class = "fa fa-edit">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class = "col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class = "box box-solid box-danger">
                                        <div class = "box-header with-border">
                                            <h3 class = "box-title">Kitchen</h3>
                                            <div class = "box-tools pull-right">
                                            </div>
                                        </div>
                                        <div class = "box-body">
                                            <table id="" class="display" cellspacing="0" width="100%" >
                                                <thead>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>BEG</th>
                                                        <th>IN</th>
                                                        <th>OUT</th>
                                                        <th>END</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th>BEG</th>
                                                        <th>IN</th>
                                                        <th>OUT</th>
                                                        <th>END</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <tr>
                                                        <td>Tomatoes</td>
                                                        <td>10</td>
                                                        <td>10</td>
                                                        <td>15</td>
                                                        <td>5</td>
                                                        <td>
                                                            <a data-toggle="modal" data-target="#myModal">
                                                                <span class = "fa fa-edit">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Potatoes</td>
                                                        <td>30</td>
                                                        <td>15</td>
                                                        <td>43</td>
                                                        <td>2</td>
                                                        <td>
                                                            <a data-toggle="modal" data-target="#myModal">
                                                                <span class = "fa fa-edit">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>      
                                </div>
                            </div>
                        </div>    
                    </div>
                        
                </section>
            </div>

