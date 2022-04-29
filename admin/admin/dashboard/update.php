<?php
if(isset($_POST['edit'])){
    $id = htmlentities(htmlspecialchars(strip_tags(trim($_POST['no_items']))));
    $tujuan_wisata = htmlentities(htmlspecialchars(strip_tags(trim($_POST['tujuan_wisata']))));
    $jmlh_hari = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jmlh_hari']))));
    $jam_berangkat = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jam_berangkat']))));
    $jam_tiba = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jam_tiba']))));
    $transportasi = htmlentities(htmlspecialchars(strip_tags(trim($_POST['transportasi']))));
    $penginapan = htmlentities(htmlspecialchars(strip_tags(trim($_POST['penginapan']))));
    $restoran = htmlentities(htmlspecialchars(strip_tags(trim($_POST['restoran']))));
    $harga = htmlentities(htmlspecialchars(strip_tags(trim($_POST['harga']))));
    $deskripsi = htmlentities(htmlspecialchars(strip_tags(trim($_POST['deskripsi']))));
    $user_id = htmlentities(htmlspecialchars(strip_tags(trim($_SESSION['id_cust']))));

    $extensi_diperbolehkan = array('png', 'jpg');
    $thumbnail = $_FILES['thumbnail']['name'];
    $x = explode('.', $thumbnail);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['thumbnail']['size'];
    $file_tmp = $_FILES['thumbnail']['tmp_name'];

    if (in_array($ekstensi, $extensi_diperbolehkan) === true) {
        if ($ukuran < 10044070) {
            move_uploaded_file($file_tmp, '../../assets/images/' . $thumbnail);
            $query = mysqli_query($koneksi, "UPDATE tb_items SET no_items='$id',tujuan_wisata='$tujuan_wisata',jmlh_hari='$jmlh_hari',jam_berangkat='$jam_berangkat',jam_tiba='$jam_tiba',transportasi='$transportasi',penginapan='$penginapan',restoran='$restoran',harga='$harga',deskripsi='$deskripsi',thumbnail='$thumbnail' WHERE no_items='$id'");
            if ($query) {
                header("Location: index.php?page=dashboard");
            } else {
                echo "Gagal";
            }
        } else {
            echo "Ukuran file terlalu besar";
        }
    } else {
        echo "Ekstensi dilarang";
    }

}
?>