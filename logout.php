<?php
    session_start();
    unset($_SESSION['status']);
    Header("Location: ../index.php");
?>