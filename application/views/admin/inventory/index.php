<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

            <div class="content-wrapper">
                <section class="content-header">
                    <?php echo $pagetitle; ?>
                    <?php echo $breadcrumb; ?>
                </section>

                <section class="content">
                    <div class = "row">
                        <div class = "col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <h3>Bar</h3>
                            <table id="" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>BEG</th>
                                        <th class = "input-column">IN</th>
                                        <th class = "input-column">OUT</th>
                                        <th>END</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Item</th>
                                        <th>BEG</th>
                                        <th>IN</th>
                                        <th>OUT</th>
                                        <th>END</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>Red Horse</td>
                                        <td>10</td>
                                        <td ><input type = "number" value = "10"></td>
                                        <td ><input type = "number" value = "15"></td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>San Mig Light</td>
                                        <td>30</td>
                                        <td ><input type = "number" value = "15"></td>
                                        <td ><input type = "number" value = "43"></td>
                                        <td>2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class = "col-lg-6 col-md-6 col-sm-12 col-xs-12">   
                            <h3>Kitchen</h3>
                            <table id="" class="display" cellspacing="0" width="100%" >
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>BEG</th>
                                        <th class = "input-column">IN</th>
                                        <th class = "input-column">OUT</th>
                                        <th>END</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Item</th>
                                        <th>BEG</th>
                                        <th>IN</th>
                                        <th>OUT</th>
                                        <th>END</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>Pork Sisig</td>
                                        <td>10</td>
                                        <td ><input type = "number" value = "10"></td>
                                        <td><input type = "number" value = "15"></td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>Fries</td>
                                        <td>30</td>
                                        <td ><input type = "number" value = "15"></td>
                                        <td ><input type = "number" value = "43"></td>
                                        <td>2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </section>
            </div>

