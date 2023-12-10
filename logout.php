<?php
    session_start();
    unset ($_SESSION['username'],$_SESSION['level']);
    session_destroy();
    header("location: login.html");
?>