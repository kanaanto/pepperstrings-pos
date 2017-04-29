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