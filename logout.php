<?php
session_start();
// Menghapus semua variabel session
session_unset();

// Menghapus session
session_destroy();

// Redirect ke halaman login
header("location: index.php");
exit;
