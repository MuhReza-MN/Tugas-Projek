<?php include 'db_cons.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data</title>
</head>

<body>
    <form action="<?php echo "hapus_data.php?akun=$id";?>" method="post">
        <center>
            <h1>Detail Data</h1>
            <hr>
            <table border="1">
                <?php
                $id_tamu = $_GET['id'];
                $query = mysqli_query($connectDb, "select * from pesan_tamu where id='$id_tamu'");
                $isian = mysqli_fetch_row($query);

                if ($isian) {
                    do {
                        list($id_tamu, $nama, $email, $pesan, $tgl) = $isian;
                        echo "  <tr><td>$nama
                        <tr><td>$email
                        <tr><td>$pesan
                        <tr><td>$tgl</table>";
                        echo "<input type=hidden name=hapus_id_tamu value='$id_tamu'>";
                        echo "<input type=hidden name=nama_tamu value='$nama'>";
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