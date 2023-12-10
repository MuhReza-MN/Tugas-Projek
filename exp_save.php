<?php 
    include 'db_cons.php';
     $exp = $_POST['isi_exp'];
     $tahun = $_POST['tahun'];

     if (($exp!="")&&($tahun!="")) {
        $query = mysqli_query($connectDb,"insert into experiences(exp,tahun)
        values('$exp','$tahun')");
        header("Location:exp_list.php?akun=$id");
     }
?>