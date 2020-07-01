function reload_table(){
    $.ajax({
        url:"<?php echo site_url('table_data'); ?>",
        beforeSend:function(f) {
            $('#table_data').html('Load Data ....');
        },
        success:function(data){
            $('#table_data').html(data);
        }
    });
}