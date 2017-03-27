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
                        <div class="col-md-12">
                            <!--Box-->
                            <div class = "box box-danger">
                                <div class = "box-header with-border">
                                    <a href = "products/add" class = "btn btn-large btn-success">
                                        <i class = "fa fa-plus"></i> Add Product
                                    </a>
                                </div>
                                <div class = "box-body">
                                    <!--Nav tabs-->
                                    <ul class = "nav nav-tabs" role = "tablist">
                                        <li role = "presentation" class = "active">
                                            <a href = "#bar-table" aria-controls = "bar-table" role = "tab" data-toggle = "tab">Bar</a>
                                        </li>
                                        <li role = "presentation">
                                            <a href = "#kitchen-table" aria-controls = "kitchen-table" role = "tab" data-toggle = "tab">Kitchen</a>
                                        </li>
                                    </ul>
                                    <!--Tab panes-->
                                    <div class = "tab-content">
                                        <!--Bar table-->
                                        <div role = "tabpanel" class = "tab-pane fade in active" id = "bar-table">
                                            <br>
                                            <div class ="container">
                                                <div class = "row">
                                                    <div class = "col-sm-11">   
                                                        <table class = "display" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Menu Group</th>
                                                                    <th>Price</th>
                                                                    <th>Status</th>
                                                                    <th>Unit</th>
                                                                    <th>Inventory Items</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Mi Ultimo Adios</td>
                                                                    <td>Extra Strong Blends</td>
                                                                    <td>50</td>
                                                                    <td><span class = "label label-success">Available</span></td>
                                                                    <td>Glass</td>
                                                                    <td>Tequila, Salt, Lemon</td>
                                                                    <td><a href = "products/add"><span class = "fa fa-edit"></span></a></td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>Item 2</td>
                                                                    <td>Extra Strong Blends</td>
                                                                    <td>50</td>
                                                                    <td><span class = "label label-success">Available</span></td>
                                                                    <td>Glass</td>
                                                                    <td>Tequila, Salt, Lemon</td>
                                                                    <td><a href = "products/add"><span class = "fa fa-edit"></span></a></td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>
                                                                <th>Name</th>
                                                                    <th>Menu Group</th>
                                                                    <th>Status</th>
                                                                    <th>Price</th>
                                                                    <th>Unit</th>
                                                                    <th>Inventory Items</th>
                                                                    <th>Action</th>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Kitchen table-->
                                        <div role = "tabpanel" class = "tab-pane fade" id = "kitchen-table">
                                            <br>
                                            <div class ="container">
                                                <div class = "row">
                                                    <div class = "col-sm-11">   
                                                        <table class = "display" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Menu Group</th>
                                                                    <th>Price</th>
                                                                    <th>Status</th>
                                                                    <th>Unit</th>
                                                                    <th>Inventory Items</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Mi Ultimo Adios</td>
                                                                    <td>Extra Strong Blends</td>
                                                                    <td>50</td>
                                                                    <td><span class = "label label-success">Available</span></td>
                                                                    <td>Glass</td>
                                                                    <td>Tequila, Salt, Lemon</td>
                                                                    <td><a href = "#"><span class = "fa fa-edit"></span></a></td>
                                                                </tr>
                                                            </tbody>
                                                            <tfoot>
                                                                <th>Name</th>
                                                                <th>Menu Group</th>
                                                                <th>Price</th>
                                                                <th>Status</th>
                                                                 <th>Unit</th>
                                                                <th>Inventory Items</th>
                                                                <th>Action</th>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
