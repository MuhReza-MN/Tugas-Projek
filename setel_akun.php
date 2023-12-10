<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Akun</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet">
</head>

<body>
    <?php include_once 'navbar.php' ?>
    <center>
        <h1>--- HALAMAN PENGATURAN AKUN ---</h1>
        <hr>
        <table border="1">
            <tr>
                <td>No.</td>
                <td>Username</td>
                <td>Level</td>
                <td>Setel</td>
            </tr>
            <?php
            $query = mysqli_query($connectDb, "select * from akun");
            $no = 1;
            while ($row = mysqli_fetch_array($query)):
                $id_akun = $row['id']; ?>
                <tr>
                    <td>
                        <?= $no; ?>
                    </td>
                    <td>
                        <?= $row['username'] ?>
                    </td>
                    <td>
                        <?php if ($row['level'] == 0) {
                            echo "Admin";
                        } else {
                            echo "User";
                        } ?>
                    </td>
                    <td>
                        <?php if ($row['level'] == 0) {
                            echo " ";
                        } else {
                            echo "<a href='hapus_akun.php?akun=$id&id=$id_akun'>Hapus Akun</a>";
                        } ?>
                    </td>
                </tr>
                <?php $no++; endwhile; ?>
        </table>
        <br><br>
        <hr><br>
        <form action="<?php echo "saveAkun.php?akun=$id";?>" method="post">
            <table>
                <h1>--- FORM PEMBUATAN AKUN ---</h1>
                <tr>
                    <td>Username
                    <td> :
                    <td><input type="text" name="username" size="21" required>
                </tr>
                <tr>
                    <td>Password
                    <td> :
                    <td><input type="password" name="password" size="21" required>
                </tr>
            </table>
            <input type="submit" value="simpan"><input type="reset" value="hapus">
        </form>
    </center>
</body>

</html>