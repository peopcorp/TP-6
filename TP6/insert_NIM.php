<?php 
    require_once("config_NIM.php");
    if(isset($_POST["submit"])){
        $get = $conn->query('INSERT INTO `nilai`(`uts`, `uas`, `kuis`, `tubes`) VALUES ('.$_POST["uts"].','.$_POST["uas"].','.$_POST["kuis"].','.$_POST["tubes"].')');
        if($get){
            header('location:rekapNilai_NIM.php');
        }else{
            header('location:inputNilai_NIM.php');
        }
    }
    //MASUKKAN KODE DISINI UNTUK INPUT KE DATABASE
    //NOTE : SETELAH INPUT BERHASIL MAKA AKAN DILANJUTKAN KE HALAMAN REKAP NILAI
?>