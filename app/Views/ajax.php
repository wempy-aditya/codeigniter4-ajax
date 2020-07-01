<script>
        // reload_table();
        myFunction()
        function myFunction() {
            setInterval(function(){ 
                reload_content(); 
            }, 4000);
        }
        function reload_content(){
            $.ajax({
                url:'<?php echo site_url('Home/content'); ?>',
                type  : 'GET',
                async : true,
                dataType : 'json',
                success:function(data){
                    var html = '';
                    var count = 1;
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+ count++ +'</td>'+
                                '<td>'+ data[i].barang_nama +'</td>'+
                                '<td>'+ data[i].barang_harga +'</td>'+
                                '</tr>';
                    }
                    $('#bagian_content').html(html);
                }
            });
        }
/* ======================================================================================================================*/
        function reload_table(){
            $.ajax({
                url:"<?php echo site_url('Home/data_barang'); ?>",
                beforeSend:function(f) {
                    $('#table_data').html('<h1 class="text-center">Load Content....</h1>');
                },
                success:function(data){
                    $('#table_data').html(data);
                }
            });
        }

        var save_method;
        function tambah(){
            save_method = 'tambah';
            $.ajax({
                url:"<?php echo site_url('Home/form_data'); ?>",
                success:function(data){
                    $('#myModal .modal-dialog .modal-content .modal-body').html(data);
                },
            });
            $('#myModal').modal('show');
            $('#modal-title').text('Form Tambah Data');
        }

        function edit(id){
            save_method = 'edit';
            $.ajax({
                url:"<?php echo site_url('Home/form_data'); ?>",
                beforeSend: function(data){
                    $('#myModal').modal('show');
                    $('#modal-title').text('Form Edit Data');
                },
                success:function(data){
                    $('#myModal .modal-dialog .modal-content .modal-body').html(data);
                    $.ajax({
                        url:"<?php echo site_url('Home/edit_form_data'); ?>",
                        data:"id="+ id,
                        type:"POST",
                        dataType:"JSON",
                        success: function(data){
                            $('[name="id"]').val(data.id);
                            $('[name="barang_nama"]').val(data.barang_nama);
                            $('[name="barang_harga"]').val(data.barang_harga);
                            $('[name="barang_jenis"]').val(data.barang_jenis);

                            $('#myModal').modal('show');
                        },
                    });
                },
            });
        }

        function simpan(){
            var url;
            if (save_method == 'tambah') {
                url = "<?php echo site_url('Home/simpan_data'); ?>";
            } else {
                url = "<?php echo site_url('Home/edit_data'); ?>";
            }
            $.ajax({
                url:url,
                type:"POST",
                data:$('#form_data').serialize(),
                success:function(data){
                    $('#myModal').modal('hide');
                    reload_table();
                },
            });
        }

        function hapus(id){
            $.ajax({
                url:"<?php echo site_url('Home/hapus_data'); ?>",
                type:"POST",
                data:"id=" + id,
                success:function(data){
                    alert(data);
                    reload_table();
                },
            });
        }
    </script>