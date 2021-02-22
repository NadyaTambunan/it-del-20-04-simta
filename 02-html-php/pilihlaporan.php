<?php
session_start();
if (!isset($_SESSION["pilihlaporan"])){
    $_SESSION["pilihlaporan"] = false;
}
if(!isset($_SESSION["pilihlaporanuser"])){
    $_SESSION["pilihlaporanuser "] = NULL;
}
?>