<?php
session_start();
if (!isset($_SESSION["loggedIn"])) {
    $_SESSION["loggedIn"] = false;
}
if (!isset($_SESSION["loginuser"])) {
    $_SESSION["loginuser"] = NULL;
}