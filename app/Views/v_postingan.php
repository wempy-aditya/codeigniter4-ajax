<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Barang</title>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/bootstrap/css/dataTables.bootstrap4.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center mt-4">Postingan Terbaru</h1>
            </div>
        </div>
        <br><br>
        <?php echo view('v_posting.php'); ?>
    </div>
    
    <script src="<?= base_url() ?>/assets/bootstrap/js/jquery.js"></script>
    <script src="<?= base_url() ?>/assets/bootstrap/js/bootstrap.js"></script>

    <?php echo view('ajax1.php'); ?>
</body>
</html>