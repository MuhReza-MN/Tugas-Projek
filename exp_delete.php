<?php 
    include 'db_cons.php';
    $id_exp = $_POST['hapus_id_exp'];
    $nama = $_POST['hapus_exp'];

    $query = mysqli_query($connectDb,"delete from experiences where id='$id_exp'");
    header("Location:exp_list.php?akun=$id");
?>