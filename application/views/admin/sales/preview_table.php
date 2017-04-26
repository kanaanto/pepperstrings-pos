<h4><b>Table Details</b></h4>
<?php foreach($preview_data->result() as $row):?>
    <p><span class = "label label-primary">Date:</span> <?=$row->date?></p>
    <p><span class = "label label-info">Time:</span> <?=$row->time?></p> 
    <?php break; ?>
<?php endforeach;?>
<hr>
<table class = "table table-hover table-striped">
    <thead>
        <tr>
            <th>Qty</th>
            <th>Order</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($preview_data->result() as $row):?>
            <tr>
                <td><?=$row->qty?></td>
                <td><?=$row->prod_name?></td>
                <td class = "pull-right priceField"><?=$row->price?></td>
            </tr>
        <?php endforeach;?>
    </tbody>
    <tfoot>
        <tr>
            <td></td>
            <td></td>
            <?php foreach($preview_data->result() as $row):?>
                <td>
                    <span class = "label label-danger">Total:</span>
                    <b class = "pull-right priceField"><?=$row->total_amt?></b>
                </td>
                <?php break; ?>
            <?php endforeach;?>
            
        </tr>
    </tfoot>
</table>