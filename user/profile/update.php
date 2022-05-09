<?php
if(isset($_POST['edit'])){
    $id = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id_cust']))));
    $username = htmlentities(htmlspecialchars(strip_tags(trim($_POST['username']))));
    $pass = htmlentities(htmlspecialchars(strip_tags(trim($_POST['password']))));
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_cust']))));
    $alamat = htmlentities(htmlspecialchars(strip_tags(trim($_POST['alamat']))));
    $telp = htmlentities(htmlspecialchars(strip_tags(trim($_POST['no_telp']))));
    $tanggal = htmlentities(htmlspecialchars(strip_tags(trim(date("Y-m-d H:i:s")))));

    $extensi_diperbolehkan = array('png', 'jpg');
    $thumbnail = $_FILES['thumbnail']['name'];
    $x = explode('.', $thumbnail);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['thumbnail']['size'];
    $file_tmp = $_FILES['thumbnail']['tmp_name'];

    if (in_array($ekstensi, $extensi_diperbolehkan) === true) {
        if ($ukuran < 10044070) {
            move_uploaded_file($file_tmp, '../assets/images/' . $thumbnail);
            $query = mysqli_query($koneksi, "UPDATE tb_user SET username='$username',nama_cust='$nama',alamat='$alamat', no_telp='$telp', thumbnail='$thumbnail', dibuat='$tanggal' WHERE id_cust='$id'");
            if ($query) {
                header("Location: index.php?page=signin");
            } else {
                echo "Gagal";
            }
        } else {
            echo "Ukuran file terlalu besar";
        }
    } else {
        echo "Ekstensi dilarang";
    }

    if (empty($pass)) {
        $query = mysqli_query($koneksi, "UPDATE tb_user SET username='$username',nama_cust='$nama',alamat='$alamat', no_telp='$telp', dibuat='$tanggal' WHERE id_cust='$id'");
    } else {
        $pass = sha1($pass);
        $query = mysqli_query($koneksi, "UPDATE tb_user SET username='$username',password='$pass',nama_cust='$nama',alamat='$alamat', no_telp='$telp', dibuat='$tanggal' WHERE id_cust='$id'");
    }

    if($query){
        session_destroy();
        header("Location: index.php?page=signin");
    }else{
        echo "gagal";
    }
}
?>