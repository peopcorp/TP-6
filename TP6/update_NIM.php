<?php
// include database connection file
include_once("config_NIM.php");
if(isset($_POST["submit"])){
    $id=$_GET['id'];
    $get = mysqli_query($conn,"UPDATE nilai SET uts=$_POST[uts], uas=$_POST[uas], kuis=$_POST[kuis], tubes=$_POST[tubes] WHERE id=$id");
    header('location:rekapNilai_NIM.php');
//MASUKKAN QUERY UNTUK UPDATE
//SETELAH UPDATE BERHASIL AKAN DILANJUTKAN KE HALAMAN REKAP NILAI

}
?>