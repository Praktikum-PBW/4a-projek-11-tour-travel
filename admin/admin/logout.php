<?php 
session_start();
session_destroy();
echo "<script>alert('Anda telah keluar!');
		window.location.replace('../signin.php')</script>";
?>