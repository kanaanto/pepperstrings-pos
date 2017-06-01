$(document).ready(function() {
    $('table.display').DataTable({
       "order": []
    });
    $('table.display').addClass("table");
    $('table.display').addClass("table-bordered");
    $('table.display').addClass("table-hover");
    $('table.display').addClass("table-striped");
	

});
function confirm_delete(){
	if (!confirm("Are you sure you want to delete this item?")){
		return false;
	}
}