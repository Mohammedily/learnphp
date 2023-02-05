<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        echo "<script>localStorage.setItem('username', '$username');</script>";
        header("Location: login.php");
        exit();
    }
?>