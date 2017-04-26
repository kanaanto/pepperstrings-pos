<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
            <div class="content-wrapper">
                <section class="content-header">
                    <?php echo $pagetitle; ?>
                    <?php echo $breadcrumb; ?>
                </section>
                <br>
                <section class="content">
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
                                <div class = "col-sm-6">
                                    <div class = "box box-solid box-success">
                                        <div class = "box-header with-border">
                                            <h3 class = "box-title">Sales</h3>
                                        </div>
                                        <div class = "box-body">
                                            <table class = "display"> 
                                                <thead>
                                                    <tr>
                                                        <th>Time</th>
                                                        <th>Table #</th>
                                                        <th>Items</th>
                                                        <th>Amount</th>
                                                        <th>View</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Time</th>
                                                        <th>Table #</th>
                                                        <th>Items</th>
                                                        <th>Amount</th>
                                                        <th>View</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <?php foreach($sales_details->result() as $row): ?>
                                                        <tr>
                                                            <td><?=$row->time?></td>
                                                            <td>#<?=$row->table_id?></td>
                                                            <td><?=$row->total_items?></td>
                                                            <td class = "priceField"><?=$row->total_amt?></td>
                                                            <td>
                                                                <a href = "#" id = "sales_id-<?=$row->sales_id?>">
                                                                    <span class = "fa fa-eye"></span>
                                                                </a>   |    
                                                                <a href = "#">
                                                                    <span class = "fa fa-edit"></span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach;?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class = "col-sm-6" id = "preview">
                                    <div class = "box box-solid box-warning">
                                        <div class = "box-header with-border">
                                            <h3 class = "box-title">Preview</h3>
                                        </div>
                                        <div class = "box-body" id = "preview-body">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

