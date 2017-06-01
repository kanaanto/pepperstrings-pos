$(document).ready(function() {
  

  var select_picker_ops = {
      "liveSearch": true,
      "size": 10,
      "selectOnTab": true
  }


  var select_picker_el = $('#affected-inv-el').html();
  

  var added_fields_num = 1;
  $("#add-affected-inv").on('click', function(){
    if($("#form-inputs .remove_field_button:last").length > 0){
      added_fields_num = $("#form-inputs .remove_field_button:last").attr('id').split('-')[2];
      added_fields_num*=1;
      added_fields_num+=1;
    }
    else{
      added_fields_num = 1;
    }
    var added_fields_id = "added-fields-"+added_fields_num,
        remove_fields_id = "remove-field-"+added_fields_num;
    var whole_new_field = "<div class = 'form-group' id = "+added_fields_id+">";

    
    whole_new_field+= "<div class = 'col-sm-4 col-sm-offset-2'>";
    //whole_new_field+= "<select name = 'prod_affected_inv_id[]' id = '"+added_fields_id+"'>";
    whole_new_field+= select_picker_el;
    //whole_new_field+= "</select>";
    whole_new_field+= "</div>";
    whole_new_field+= "<label class = 'control-label col-sm-2' for = 'quantity'>Quantity</label>";
    whole_new_field+= "<div class = 'col-sm-2 offset-sm-2'>";
    whole_new_field+= "<input type = 'number' class = 'form-control' id = 'quantity' name = 'prod_affected_qty[]'>";
    whole_new_field+= "</div>";
    whole_new_field+= "<div class = 'col-sm-2'>";
    whole_new_field+= "<button type = 'button' class = 'btn btn-warning remove_field_button' id = '"+remove_fields_id+"'>Remove</button>";
    whole_new_field+= "</div>";
    whole_new_field+= "</div>";


    $("#form-inputs").append(whole_new_field);
    
    $("#form-inputs select:last").addClass('selectpicker');
    $("#form-inputs select:last").selectpicker(select_picker_ops);
    
  });


  $('.selectpicker').selectpicker(select_picker_ops);
  
  // Remove added fields
  $("#form-inputs").on('click', '.btn.btn-warning.remove_field_button', function(){
    var id = $(this).attr('id').split('-')[2];

    $("#added-fields-"+id).remove();
  });

});