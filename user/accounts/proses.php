<?php
if  (isset($_POST['masuk'])){
    session_start();
    
    
    $username = htmlentities(htmlspecialchars(strip_tags(trim($_POST['username']))));
    $pass = htmlentities(htmlspecialchars(strip_tags(trim($_POST['password']))));
    $pass = sha1($pass);

    $query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username' && password='$pass'");
    $data = mysqli_fetch_array($query);

    if(mysqli_num_rows($query) == 1){
        if($data['status'] == "user"){
            $_SESSION['id_cust'] = $data['id_cust'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['nama_cust'] = $data['nama_cust'];
            $_SESSION['alamat'] = $data['alamat'];
            $_SESSION['no_telp'] = $data['no_telp'];
            $_SESSION['status'] = $data['status'];
            $_SESSION['thumbnail'] = $data['thumbnail'];
            header("location: indexs.php?page=home");
        }else{
            $_SESSION['error'] = "Username atau password salah";
            header("Location: index.php?page=signin");    
        }
    }else{
        $_SESSION['error'] = "Username atau password salah";
        header("Location: index.php?page=signin");
    }
}

?>