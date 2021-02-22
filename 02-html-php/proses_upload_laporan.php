<?php 

include_once("vendor/autoload.php");
include_once("session.php");

use Medoo\Medoo;

$database = new Medoo([
    'database_type' => 'mysql',
    'server' => 'localhost',
    'database_name' => 'p04_db',
    'username' => 'p04_g36d',
    'password' => 'F8q3O6KCEp'
]);

if($_SESSION["loggedIn"]) {
    header("Location: uploadlaporan.php");
    exit;
}

$id_laporan = $_POST["id"];
$judul_laporan = $_POST["judul_laporan"];
$Deskripsi = $_POST["Deskripsi"];
$tanggal = $_POST["tanggal"];
$kelompok = $_POST["kelompok"];
$sesi = $_POST["sesi"];


$database->insert("id_laporan", [
    "judul_laporan" => $judul_laporan,
    "id_kelompok" => $id_kelompok,
    "tanggal" => $tanggal,
    "kelompok" => $kelompok,
    "sesi" => $sesi,
]);

header("Location: index.php");

?>