<?php include 'db_cons.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data Pengalaman</title>
</head>

<body>
    <form action="<?php echo "exp_delete.php?akun=$id";?>" method="post">
        <center>
            <h1>Detail Data</h1>
            <hr>
            <table border="1">
                <?php
                $id_exp = $_GET['id'];
                $query = mysqli_query($connectDb, "select * from experiences where id='$id_exp'");
                $isian = mysqli_fetch_row($query);

                if ($isian) {
                    do {
                        list($id_exp, $exp, $tahun) = $isian;
                        echo "  <tr><td>$exp
                        <tr><td>$tahun</table>";
                        echo "<input type=hidden name=hapus_id_exp value='$id_exp'>";
                        echo "<input type=hidden name=hapus_exp value='$exp'>";
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