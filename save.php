<?php 
    include 'db_cons.php';
     $nama = $_POST['nama'];
     $email = $_POST['email'];
     $pesan = $_POST['isi_pesan'];

     if (($nama!="")&&($email!="")&&($pesan!="")) {
        $query = mysqli_query($connectDb,"insert into pesan_tamu(nama,email,pesan,tgl)
        values('$nama','$email','$pesan',now())");
        header("Location:utama.php?akun=$id");
     }
?>