$(document).ready(function() {
    $('table.display').DataTable();
    $('table.display').addClass("table");
    $('table.display').addClass("table-bordered");
    $('table.display').addClass("table-hover");
    $('table.display').addClass("table-striped");
    var inventory_items = [
   { value: 'Potatoes', data: 'pot' },
   // ...
   { value: 'Tomatoes', data: 'tom' }
	];

	$('.autocomplete').autocomplete({
	    lookup: inventory_items,
	    //onSelect: function (suggestion) {
	    	//suggestion:null;
	        //$("#quantity").focus();
	    //}
	});
} );