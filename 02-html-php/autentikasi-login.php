<?php
include_once('database_connection.php');
include_once('session.php');

if ($_SESSION["loggedIn"]) {
    header("Location: index.php");
    exit;
}

$username = $_POST["username"];
$password = $_POST["password"];
$authenticated = false;

$user = $database->select(
    "user",
    "*",
    [
        "username" => $username,
        "password" => $password
    ]
);

$user = $user[0];

if ($user) {
    $authenticated = true;
}

if (!$authenticated) {
    header("Location: login.php");
} else {
    $_SESSION["loginuser"] = $user["nama"];
    $_SESSION["loggedIn"] = true;
    header("Location: index.php");
}