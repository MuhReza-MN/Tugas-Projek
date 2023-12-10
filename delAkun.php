<?php 
    include 'db_cons.php';
    $id_akun = $_POST['hapus_id_akun'];
    $nama = $_POST['hapus_akun'];

    $query = mysqli_query($connectDb,"delete from akun where id='$id_akun'");
    header("Location:setel_akun.php?akun=$id");
?>