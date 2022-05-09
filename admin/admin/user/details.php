<?php
if (isset($_GET['id_cust'])) {
    $id = $_GET['id_cust'];

    $query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_cust='$id'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
?>
<div class="row">
    <div class="col-md-12">
        <h4 class="text-center">ProfilPengguna</h4>
        <hr class="w-25 mx-auto">
        <?php
        if($_SESSION['thumbnail'] == ""){
            ?>
        <div class="col-md-12 text-center">
            <img src="../../assets/images/logsign.png" style="width: 250px; height: 250px;"
                class="img-thumbnail rounded-circle mb-3">
        </div>
        <?php
        } else {
        ?>
        <div class="col-md-12 text-center">
            <img src="../../assets/images/<?= $data['thumbnail']?>" style="width: 250px; height: 250px;"
                class="img-thumbnail rounded-circle mb-3">
        </div>
        <?php
        }
        ?>
        <form action="index.php?page=profile_update" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id_cust" value="<?=$data['id_cust']?>">
            <div class="mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="username" name="username" id="username" class="form-control" value="<?=$data['username']?>"
                    required>
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="mb-2">
                <label for="nama_cust" class="form-label">Nama</label>
                <input type="text" name="nama_cust" id="nama_cust" class="form-control" value="<?=$data['nama_cust']?>">
            </div>
            <div class="mb-2">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat"
                    value="<?=$data['alamat']?>">
            </div>
            <div class="mb-2">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
                <input type="tel" name="no_telp" id="no_telp" class="form-control" placeholder="Masukkan Nomor Telepon"
                    value="<?=$data['no_telp']?>">
            </div>
            <a href="index.php?page=user&id_cust<?= $data['id_cust']?>">
                <input type="button" value="Kembali" class="btn btn-primary">
            </a>

        </form>
    </div>
</div>
<?php
    } else {
        header("Location:index.php");
    }
} else {
    header("Location:index.php");
}
?>