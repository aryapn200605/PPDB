<?php 
session_start();
session_destroy();
echo "<script>alert('Telah Berhasil Log Out !');</script>";
echo "<script>window.location='home/home.php'</script>";
?>