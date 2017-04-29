$(document).ready(function() {
  var lookup_values;  
  var auto_comp;
  var base_url = window.location.origin;
  

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
    var whole_new_field = "";

    whole_new_field+= "<div class = 'form-group' id = '"+added_fields_id+"'>";
    whole_new_field+= "<div class = 'col-sm-4 col-sm-offset-2'><input type = 'hidden' name = 'prod_affected_inv_id[]' id = 'invId-"+added_fields_num+"'>";
    whole_new_field+= "<input type = 'text' class = 'form-control autocomplete' name = 'prod_affected_inv[]' id = 'inventoryItem-"+added_fields_num+"' placeholder = 'Inventory Name'>";
    whole_new_field+= "</div>";
    whole_new_field+= "<label class = 'control-label col-sm-2' for = 'quantity'>Quantity</label>";
    whole_new_field+= "<div class = 'col-sm-2 offset-sm-2'>";
    whole_new_field+= "<input type = 'number' class = 'form-control' id = 'quantity' name = 'prod_affected_qty[]'>";
    whole_new_field+= "</div>";
    whole_new_field+= "<div class = 'col-sm-2'>";
    whole_new_field+= "<button type = 'button' class = 'btn btn-warning remove_field_button' id = '"+remove_fields_id+"'>Remove</button>";
    whole_new_field+= "</div>";
    whole_new_field+= "</div>";

    $("#form-inputs").append(whole_new_field).find("input[type=text]:last").autocomplete(auto_comp);
    
  });
  
  // Remove added fields
  $("#form-inputs").on('click', '.btn.btn-warning.remove_field_button', function(){
    var id = $(this).attr('id').split('-')[2];
    $("#added-fields-"+id).remove();
  });

  //Set up Autocompte to existinf affected inventories
  var lookup_values;
  $.ajax({
    url:base_url+"/admin/inventory/get_inventory_items_autocomplete",
    dataType:'JSON',
    type:'GET',
    success:function(val){
      lookup_values = val;
      setAutoComplete();
     
      
    }
  });
 
  //Autocomplete for Affected inventories
  function setAutoComplete(){
    auto_comp = {
      //serviceUrl:base_url+"/admin/inventory/get_inventory_items_autocomplete",
      lookup: lookup_values,
      /*function (query, done) {
        var result = {
          suggestions: lookup_values
        };
        
        done(result);
      },*/
      
     transformResult: function(response) {
        return {
            suggestions: $.map(response.result, function(dataItem) {
                //return { value: dataItem.data, data: dataItem.value };
              return { value: dataItem.value, data: dataItem.data };
            })  
        };
       },
      onHint: function (hint) {
            $('#autocomplete-ajax-x').val(hint);
        },


      onSelect: function (suggestion) {
        var id = $(this).attr('id').split('-')[1];
        $('#invId-'+id).val(suggestion.data);
      }    
    };

     $('.autocomplete').autocomplete(auto_comp);
  }
  
    

});