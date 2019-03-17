<?php
// include database connection file
include_once("config_NIM.php");
$id=$_GET['id'];
    $get = mysqli_query($conn,"DELETE FROM nilai WHERE id=$id");
    header('location:rekapNilai_NIM.php');
//MASUKKAN QUERY UNTUK HAPUS
//SETELAH HAPUS BERHASIL AKAN DILANJUTKAN KE HALAMAN REKAP NILAI
?>