<div class="row">
    <div class="col-md-3">
        <div class="row mb-3">
            <button class="btn btn-secondary" onclick="reload_content()" type="button">Content</button>
        </div>
        <div class="row mb-3">
            <button class="btn btn-success" onclick="reload_table()" type="button">Reload Content</button>
        </div>
        <div class="row mb-3">
            <button class="btn btn-primary" onclick="tambah()" type="button">Tambah Data</button>
        </div>
    </div>
    <div class="col-md-9">
        <div class="table-responsive">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody id="bagian_content"></tbody>
            </table>
        </div>
    </div>
</div>


<div id="table_data"></div>