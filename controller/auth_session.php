<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: ../view/connection.php");
        exit();
    }
?>