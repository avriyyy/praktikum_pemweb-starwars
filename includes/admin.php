<?php

if($_SESSION['role'] != 'admin'){
    header("Location: ../pages/home.php");
    exit;
}

?>