<?php
if (isset($_GET['no_items'])){
    $id = $_GET['no_items'];

    $query = mysqli_query($koneksi, "DELETE FROM tb_items WHERE no_items='$id'");

    if($query){
        header("Location: index.php?page=dashboard");
    }else{
        echo "gagal";
    }
}
?>