<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet">
</head>

<body>
    <?php include_once 'navbar.php' ?>
    <center>
        <table border=1>
            <tr class="t-head">
                <td>No.</td>
                <td>Nama Tamu</td>
                <td>Alamat Email</td>
                <td>Pesan Tamu</td>
                <td>Tanggal Bertamu</td>
                <?php if ($level == 0) {
                    echo "<td>Setel</td>";
                } ?>
            </tr>
            <?php
            $query = mysqli_query($connectDb, "select * from pesan_tamu order by tgl desc");
            $no = 1;
            while ($row = mysqli_fetch_array($query)):
                $id_tamu = $row['id'];
                ?>
                <tr>
                    <td>
                        <?= $no; ?>
                    </td>
                    <td>
                        <?= $row['nama']; ?>
                    </td>
                    <td>
                        <?= $row['email']; ?>
                    </td>
                    <td>
                        <?= $row['pesan']; ?>
                    </td>
                    <td>
                        <?= $row['tgl']; ?>
                    </td>
                    <?php
                    if ($level == 0) {
                        echo "<td><a href='hapus.php?id=$id_tamu&akun=$id'>Hapus</a></td>";
                    } ?>
                </tr>
                <?php $no++; endwhile; ?>
        </table>
    </center>
</body>

</html>