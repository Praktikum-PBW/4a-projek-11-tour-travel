<?php 
session_destroy();
echo "<script>alert('Anda telah keluar!');
		window.location.replace('index.php?page=home')</script>";
?>