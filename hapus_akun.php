<?php include 'db_cons.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Akun</title>
</head>

<body>
    <form action="<?php echo "delAkun.php?akun=$id";?>" method="post">
        <center>
            <h1>Konfirmasi Penghapusan Akun</h1>
            <hr>
            <table border="1">
                <?php
                $id_akun = $_GET['id'];
                $query = mysqli_query($connectDb, "select * from akun where id='$id_akun'");
                $isian = mysqli_fetch_row($query);

                if ($isian) {
                    do {
                        list($id, $username) = $isian;
                        echo "  <tr><td>Hapus Akun : $username?</table>";
                        echo "<input type=hidden name=hapus_id_akun value='$id_akun'>";
                        echo "<input type=hidden name=hapus_akun value='$username'>";
                    } while ($isian = mysqli_fetch_row($query));
                    echo "<hr><input type=submit value='Konfirmasi Hapus'>";
                } else {
                    echo "</table> <h2><font color=red>Data Tidak Ada!!</h2>";
                }
                ?>
    </form>
    </center>
</body>

</html>