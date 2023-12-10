<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiences</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet">
</head>

<body>
    <?php include_once 'navbar.php' ?>
    <center>
        <table border="1">
            <tr>
                <td>No.</td>
                <td>Pengalaman</td>
                <td>Tahun</td>
                <?php if ($level == 0) {
                    echo "<td>Setel</td>";
                    echo "<td rowspan='100%''><a href='exp_add.php?akun=$id'>Tambah Data</a></td>";
                } ?>
            </tr>
            <?php
            $query = mysqli_query($connectDb, "select * from experiences");
            $no = 1;
            while ($row = mysqli_fetch_array($query)):
                $id_exp = $row['id']; ?>
                <tr>
                    <td>
                        <?= $no; ?>
                    </td>
                    <td>
                        <?= $row['exp']; ?>
                    </td>
                    <td>
                        <?= $row['tahun']; ?>
                    </td>
                    <?php if ($level == 0) {
                        echo "<td><a href='exp_del.php?id=$id_exp&akun=$id'>Hapus</a></td>";
                    } ?>

                </tr>
                <?php $no++; endwhile; ?>
        </table>
    </center>
</body>

</html>