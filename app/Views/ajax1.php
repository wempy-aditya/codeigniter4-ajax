<script>

    reload_content()
    function reload_content(){
        $.ajax({
            url:'<?php echo site_url('Postingan/postingan'); ?>',
            type  : 'GET',
            async : true,
            dataType : 'json',
            success:function(data){
                var html = '';
                var count = 1;
                var i;
                for(i=0; i<data.length; i++){
                    html += '<div class="col-md-3 mt-3">'+
                            '<div class="card">'+
                            '<img src="<?= base_url('folder_upload/'); ?>'+data[i].gambar+'"class="card-img-top" alt="gambar">'+
                            '<div class="card-body">'+ 
                            '<h5 class="card-title">' + data[i].judul + '</h5>'+
                            '<p class="card-text">' + data[i].isi + '</p>'+
                            '<p class="card-text"><b>Like : </b>' + data[i].atas + '</p>'+
                            '<p class="card-text"><b>Like : </b>' + data[i].bawah + '</p>'+
                            '<button onclick="like('+data[i].id+')" class="btn btn-primary">Like</button>'+
                            '<button onclick="dislike('+data[i].id+')" class="btn btn-danger">Dislike</button>'+
                            '</div>'+
                            '</div>'+
                            '</div>';
                }
                $('#bagian_content').html(html);
            }
        });
    }

    function like(id){
            $.ajax({
                url:"<?php echo site_url('Postingan/like'); ?>",
                type:"POST",
                data:"id=" + id,
                success:function(data){
                    reload_content();
                },
            });
        }
    function dislike(id){
            $.ajax({
                url:"<?php echo site_url('Postingan/dislike'); ?>",
                type:"POST",
                data:"id=" + id,
                success:function(data){
                    reload_content();
                },
            });
        }
</script>
