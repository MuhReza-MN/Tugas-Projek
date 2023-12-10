<?php
    $localhost = 'localhost';
    $userDb = 'root';
    $passDb = '';
    $nameDb = 'projek_uas';

    $connectDb = mysqli_connect($localhost, $userDb, $passDb, $nameDb);
    
    $id = $_GET['akun'];
    $akun_cek = mysqli_query($connectDb, "select * from akun where id='$id'");
    $akun = mysqli_fetch_array($akun_cek);
    $nAkun = $akun['username'];
    $level = $akun['level'];
    error_reporting(0);
?>