<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Pesan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen&display=swap" rel="stylesheet">
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet">
</head>
<body>
<?php include_once 'navbar.php' ?>
<center>
<form action="<?php echo "exp_save.php?akun=$id";?>" method="post">
    <h1>--- FORM TULIS PENGALAMAN ---</h1><hr>
    <table>
        <tr><td>Pengalaman<td> : <td><textarea name="isi_exp" required></textarea></tr>
        <tr><td>Tahun<td> : <td><input type="number" name="tahun" size="21" min="0" required></tr>
    </table>
    <input type="submit" value="simpan"><input type="reset" value="hapus">
</form>
</center>
</body>
</html>