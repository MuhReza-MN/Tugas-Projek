<?php 
    include 'db_cons.php';
?>

<ul id="menu-bar">
        <li>
            <a>Selamat Datang!
                <?= $nAkun ?>
            </a>
        </li>
        <li><?php echo "<a href='utama.php?akun=$id'>";?>Menu Utama</a>
            <ul>
                <?php
                if ($level == 0) {
                    echo "<li><a href='setel_akun.php?akun=$id'>Kelola Akun</a></li><hr>";
                }
                ?>
                <li><?php echo "<a href='form_pesan.php?akun=$id'>Tambah Pesan</a>";?></li><hr>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </li>
        <li><?php echo "<a href='exp_list.php?akun=$id'>";?>Experiences</a></li>
    </ul>