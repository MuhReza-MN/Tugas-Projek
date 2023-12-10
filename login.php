<?php
    session_start();

    include 'db_cons.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($connectDb,"select * from akun where username='$username' and password='$password'");
    $hasil = mysqli_fetch_array($query);
    $id = $hasil['id'];

    if ($hasil) {
        do {
            $_SESSION['username']=$_POST['username'];
            header ("location: utama.php?akun=$id");
        } while ($hasil=mysqli_fetch_row($query));
    } else {
        error_reporting(0);
        include "login.html";
        echo "<center><font color=red><b border='1'>USERNAME / PASSWORD SALAH!</b></font></center>";
        
    }
?>