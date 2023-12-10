<?php 
    include 'db_cons.php';
    $id_tamu = $_POST['hapus_id_tamu'];
    $nama = $_POST['nama_tamu'];

    $query = mysqli_query($connectDb,"delete from pesan_tamu where id='$id_tamu'");
    header("Location:utama.php?akun=$id");
?>