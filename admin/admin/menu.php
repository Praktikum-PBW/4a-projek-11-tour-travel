<?php
if(isset($_SESSION['status'])== ""){
    $_SESSION['error'] = "Silahkan untuk login terlebih dahulu";
    header("Location: ../signin.php");
}
if(isset($_GET['page'])){
    
    include '../../lib/koneksi.php';
    
    $page = $_GET['page'];

    switch($page){
        case 'dashboard':
            include 'dashboard/index.php';
            break;
        case 'dashboard_create':
            include 'dashboard/create.php';
            break;
        case 'dashboard_store':
            include 'dashboard/store.php';
            break;
        case 'dashboard_edit':
            include 'dashboard/edit.php';
            break;
        case 'dashboard_update':
            include 'dashboard/update.php';
            break;
        case 'dashboard_delete':
            include 'dashboard/delete.php';
            break;
        case 'user':
            include 'user/index.php';
            break;
        case 'user_details':
            include 'user/details.php';
            break;
        case 'user_delete':
            include 'user/delete.php';
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
        default :
            echo "Maaf Halaman Tidak Ada";
            break;
    }   
}
?>