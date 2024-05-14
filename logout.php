<?php
session_start();

// menghapus semua variabel sesi
session_unset();

// menghancurkan sesi
session_destroy();

// Redirect ke halaman login
header("location: login.php");
exit;
?>