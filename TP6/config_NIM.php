<?php
    $conn = new mysqli('localhost', 'root', '', 'mod6');
    if(!$conn){
        exit();
        echo "koneksi gagal";
    }
?>