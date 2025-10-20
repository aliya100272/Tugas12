<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
include "koneksi.php";
$id = $_GET['id'];

$sql = "DELETE FROM eskul WHERE id=$id";
if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Data berhasil dihapus'); window.location='index.php';</script>";
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
