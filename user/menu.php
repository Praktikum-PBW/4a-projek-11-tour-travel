<?php
if(isset($_GET['page'])){

    include '../lib/koneksi.php';
    
    $page = $_GET['page'];
    
    switch($page){
    case 'destinasi':
    include 'destinasi.php';
    break;
    case 'home':
    include 'home.php';
    break;
    case 'details':
    include 'details.php';
    break;
    case 'pesan':
    include 'pesan.php';
    break;
    case 'pesan_proses':
    include 'pesan_proses.php';
    break;
    case 'profile':
    include 'profile/index.php';
    break;
    case 'profile_edit':
    include 'profile/edit.php';
    break;
    case 'profile_update':
    include 'profile/update.php';
    break;
    case 'signup':
    include 'accounts/signup.php';
    break;
    case 'signup_create':
    include 'accounts/create.php';
    break;
    case 'signin':
    include 'accounts/signin.php';
    break;
    case 'signin_proses':
    include 'accounts/proses.php';
    break;
    case 'about':
    include 'about.php';
    break;
    case 'logout':
    include 'logout.php';
    break;
    default :
    echo "Maaf Halaman Tidak Ada";
    break;
    }
}
?>