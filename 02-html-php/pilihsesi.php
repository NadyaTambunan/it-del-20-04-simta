<?php
session_start();
if (!isset($_SESSION["pilihsesi"])){
    $_SESSION["pilihsesi"] = false;
}
if(!isset($_SESSION["pilihsesilaporan"])){
    $_SESSION["pilihsesilaporan"] = NULL;
}
?>