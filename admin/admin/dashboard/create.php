<div class="row">
    <div class="col-md-12">
        <h4>Tambah Data Item</h4>
        <form action="index.php?page=dashboard_store" method="post" enctype="multipart/form-data">
            <div class="mt-2">
                <label for="tujuan_wisata" class="form-label">Tujuan Wisata</label>
                <input type="text" name="tujuan_wisata" id="tujuan_wisata" class="form-control"
                    placeholder="Masukkan Tujuan Wisata" required>
            </div>
            <div class="mt-2">
                <label for="jmlh_hari" class="form-label">Jumlah Hari</label>
                <input type="number" name="jmlh_hari" id="jmlh_hari" class="form-control"
                    placeholder="Masukkan Jumlah Hari" required>
            </div>
            <div class="mt-2">
                <label for="jam_berangkat" class="form-label">Jam Keberangkatan</label>
                <input type="time" name="jam_berangkat" id="jam_berangkat" class="form-control"
                    placeholder="Masukkan Jam Keberangkatan" required>
            </div>
            <div class="mt-2">
                <label for="jam_tiba" class="form-label">Jam Tiba</label>
                <input type="time" name="jam_tiba" id="jam_tiba" class="form-control" placeholder="Masukkan Jam Tiba"
                    required>
            </div>
            <div class="mt-2">
                <label for="transportasi">Transportasi</label><br>
                <select style="height: 35px;" name="transportasi" id="transportasi">
                    <option value="bus">Bus</option>
                    <option value="kapal">Kapal</option>
                    <option value="kereta">Kereta</option>
                    <option value="pesawat">Pesawat</option>
                </select>
            </div>
            <div class="mt-2">
                <label for="penginapan" class="form-label">Penginapan</label>
                <input type="text" name="penginapan" id="penginapan" class="form-control"
                    placeholder="Masukkan Penginapan" required>
            </div>
            <div class="mt-2">
                <label for="restoran" class="form-label">Restoran</label>
                <input type="text" name="restoran" id="restoran" class="form-control" placeholder="Masukkan Restoran"
                    required>
            </div>
            <div class="mt-2">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" name="harga" id="harga" class="form-control" placeholder="Masukkan Restoran"
                    required>
            </div>
            <div class="mt-2">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan Deskripsi"
                    style="height: 100px" required></textarea>
            </div>
            <div class="mb-2">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control">
            </div>
            <input type="submit" value="Tambah" name="tambah" class="btn btn-primary mt-2">
        </form>
    </div>
</div>