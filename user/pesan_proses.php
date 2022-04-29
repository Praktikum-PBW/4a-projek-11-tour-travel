<?php
if(isset($_POST['pesan'])){
    $no_items = htmlentities(htmlspecialchars(strip_tags(trim($_POST['no_items']))));
    $tgl_berangkat = htmlentities(htmlspecialchars(strip_tags(trim($_POST['tgl_berangkat']))));
    $jmlh_tiket = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jmlh_tiket']))));
    $user_id = htmlentities(htmlspecialchars(strip_tags(trim($_SESSION['id_cust']))));

    $query = mysqli_query($koneksi, "INSERT INTO tb_detail VALUES(null,'$user_id','$no_items','$jmlh_tiket','$tgl_berangkat')");

    if($query){ 
        header("Location: indexs.php?page=transaksi");
    }else{
        echo "gagal";
    }
}
?>