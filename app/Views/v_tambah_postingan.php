<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Barang</title>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/bootstrap/css/dataTables.bootstrap4.css">
</head>
<body>

    <div class="container">
        <br><br>
        <div class="row">
            <div class="col">
                <?php echo form_open_multipart(base_url('Postingan/simpan_data')); ?>
                    <div class="form-group row">
                        <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="judul">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="isi" class="col-sm-2 col-form-label">Isi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="isi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="isi" class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="gambar">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Publish</button>
                        </div>
                    </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>

    <script src="<?= base_url() ?>/assets/bootstrap/js/jquery.js"></script>
    <script src="<?= base_url() ?>/assets/bootstrap/js/bootstrap.js"></script>
</body>
</html>