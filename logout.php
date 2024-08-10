<?php
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['nivelAcesso']);
    unset($_SESSION['mailUser']);
    session_destroy();
    header("location: index.php");
    exit;