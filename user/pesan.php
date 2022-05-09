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
            <form action="indexs.php?page=pesan_proses" method="post">
                <input type="hidden" name="no_items" value="<?= $no_items ?>">
                <div class="mt-2">
                    <label for="jmlh_tiket" class="form-label">Jumlah Tiket</label>
                    <input type="number" name="jmlh_tiket" id="jmlh_tiket" class="form-control"
                        placeholder="Masukkan Jumlah Pesan" required>
                </div>
                <div class="mt-2">
                    <label for="tgl_berangkat" class="form-label">Tanggal Keberangkatan</label>
                    <input type="date" name="tgl_berangkat" id="tgl_berangkat" class="form-control"
                        placeholder="Masukkan Tanggal Keberangkatan" required>
                </div>
                <input type="submit" value="Pesan" name="pesan" class="btn btn-primary mt-2">
            </form>
        </div>
    </div>
</div>

<?php
}
?>