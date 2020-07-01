<form id="form_data">
    <input type="hidden" name="id">
    <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" class="form-control" name="barang_nama" id="barang_nama" placeholder="Nama Barang" required>
    </div>
    <div class="form-group">
        <label>Harga Barang</label>
        <input type="text" class="form-control" name="barang_harga" id="barang_harga" placeholder="Harga Barang" required>
    </div>
    <div class="form-group">
        <label>Status</label>
        <select class="form-control" id="barang_jenis" name="barang_jenis" required>
            <option disabled selected>-- Silahkan Pilih --</option>
            <option value="makanan">Makanan</option>
            <option value="minuman">Minuman</option>
        </select>
    </div>
</form>