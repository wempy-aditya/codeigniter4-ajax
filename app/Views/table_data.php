<table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Jenis Barang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($barang as $key => $value) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $value['barang_nama']; ?></td>
                <td><?= $value['barang_harga']; ?></td>
                <td><?= $value['barang_jenis']; ?></td>
                <td>
                    <button class="btn btn-warning" onclick="edit(<?= $value['id']; ?>)">Edit</button>
                    <button class="btn btn-danger" onclick="hapus(<?= $value['id']; ?>)">Hapus</button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
</table>