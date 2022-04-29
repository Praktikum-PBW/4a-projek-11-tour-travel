<?php
if (isset($_GET['id_cust'])){
    $id = $_GET['id_cust'];

    $query = mysqli_query($koneksi, "DELETE FROM tb_user WHERE id_cust='$id'");

    if($query){
        header("Location: index.php?page=user");
    }else{
        echo "gagal";
    }
}
?>