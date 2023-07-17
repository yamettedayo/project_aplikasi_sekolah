<?php
include "sambungkan.php";
$id = $_GET['id'];

$sql = "DELETE FROM databuku WHERE id_buku = '$id'";
$query = mysqli_query($conn, $sql) or die("SQL Delete Error");

if ($query) {
    echo "<script> window.location.assign('?page=tabel_buku');</script>";
} else {
    echo "<script> alert('Data gagal dihapus'); window.location.assign('?page=tabel_buku');</script>";
}
?>