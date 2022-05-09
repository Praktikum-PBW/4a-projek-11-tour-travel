<?php
if (isset($_GET['no_items'])){
    $no_items = $_GET['no_items'];

    $query = mysqli_query($koneksi, "SELECT * FROM tb_items WHERE no_items='$no_items'");
    $data = mysqli_fetch_array($query);
    ?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h4>Detail Wisata</h4>
            <div class="mt-2">
                <label for="tujuan_wisata" class="form-label">Tujuan Wisata</label>
                <input type="text" name="tujuan_wisata" id="tujuan_wisata" class="form-control"
                    value="<?= $data['tujuan_wisata']?>" placeholder="Masukkan Tujuan Wisata" disabled>
            </div>
            <div class="mt-2">
                <label for="jmlh_hari" class="form-label">Jumlah Hari</label>
                <input type="number" name="jmlh_hari" id="jmlh_hari" class="form-control"
                    value="<?= $data['jmlh_hari']?>" placeholder="Masukkan Jumlah Hari" disabled>
            </div>
            <div class="mt-2">
                <label for="jam_berangkat" class="form-label">Jam Keberangkatan</label>
                <input type="time" name="jam_berangkat" id="jam_berangkat" class="form-control"
                    value="<?= $data['jam_berangkat']?>" placeholder="Masukkan Jam Keberangkatan" disabled>
            </div>
            <div class="mt-2">
                <label for="jam_tiba" class="form-label">Jam Tiba</label>
                <input type="time" name="jam_tiba" id="jam_tiba" class="form-control" value="<?= $data['jam_tiba']?>"
                    placeholder="Masukkan Jam Tiba" disabled>
            </div>
            <div class="mt-2">
                <label for="transportasi" class="form-label">Transportasi</label>
                <input type="text" name="transportasi" id="transportasi" class="form-control"
                    value="<?= $data['transportasi']?>" placeholder="Masukkan Transportasi" disabled>
            </div>
            <div class="mt-2">
                <label for="penginapan" class="form-label">Penginapan</label>
                <input type="text" name="penginapan" id="penginapan" class="form-control"
                    value="<?= $data['penginapan']?>" placeholder="Masukkan Penginapan" disabled>
            </div>
            <div class="mt-2">
                <label for="restoran" class="form-label">Restoran</label>
                <input type="text" name="restoran" id="restoran" class="form-control" value="<?= $data['restoran']?>"
                    placeholder="Masukkan Restoran" disabled>
            </div>
            <div class="mt-2">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" name="harga" id="harga" class="form-control" value="<?= $data['harga']?>"
                    placeholder="Masukkan Harga" disabled>
            </div>
            <div class="mt-2">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan Deskripsi"
                    style="height: 100px" disabled><?= $data['deskripsi']?></textarea>
            </div>
            <br>
            <a href="indexs.php?page=pesan&no_items=<?= $data['no_items'] ?>" class="btn btn-primary">Pesan</a>
        </div>
    </div>
</div>

<?php
}
?>