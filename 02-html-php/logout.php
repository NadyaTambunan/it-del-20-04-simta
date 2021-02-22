<?php
include_once('session.php');
$_SESSION["loggedIn"] = false;
$_SESSION["loginuser"] = NULL;
header("Location: login.php");
exit;