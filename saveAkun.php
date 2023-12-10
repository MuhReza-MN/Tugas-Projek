<?php 
    include 'db_cons.php';
     $username = $_POST['username'];
     $password = $_POST['password'];

     if (($username!="")&&($password!="")) {
        $query = mysqli_query($connectDb,"insert into akun(username,password,level)
        values('$username','$password',1)");
        header("Location:setel_akun.php?akun=$id");
     }
?>