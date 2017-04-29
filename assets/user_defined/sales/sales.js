$(document).ready(function() {
    $('table.display').DataTable();
    $('table.display').addClass("table");
    $('table.display').addClass("table-bordered");
    $('table.display').addClass("table-hover");
    $('table.display').addClass("table-responsive");
    $('table.display').addClass("table-striped");
    var d = new Date();

    var month = d.getMonth()+1;
    var day = d.getDate();

    var output = d.getFullYear() + '-' +
        (month<10 ? '0' : '') + month + '-' +
        (day<10 ? '0' : '') + day;

    $('#date-from').val(output);
    $('#date-to').val(output);

    $('#sales-table').on('click', 'tbody td a:first-child', function(event){
        var id = $(this).attr('id').split('-')[1];
        var full_url = window.location.origin + "/admin/sales/get_sales_preview?sales_id="+id;
        $.ajax({
            url:full_url,
            dataType:"JSON",
            type:"GET",
            success:function(result){
                $('#preview-body').html(result.previewHtml);
            }
        });
    });

    $("#filterDate").on('click', function(event){
        var date_from = $("#date-from").val(), date_to = $("#date-to").val();
        var full_url = window.location.origin + "/admin/sales/get_sales_details?date_from="+date_from+"&date_to="+date_to;
        $.ajax({
            url:full_url,
            dataType:"text",
            type:"GET",
            success:function(result){
                var newRow = result;
                var table = $('table.display').DataTable();
                table.clear().draw();
                table.rows.add($(newRow)).draw();
                $('#preview-body').html("");
            },
            error:function(val){
                console.log(val);
            }

        });
        
    });
});
