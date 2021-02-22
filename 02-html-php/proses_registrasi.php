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
    header("Location: membentukKelompok.php");
    exit;
} 

$id_kelompok = $_POST["id"];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];
$nim_mahasiswa_1 = $_POST['NIM1'];
$nama_mahasiswa_1 = $_POST['nama1'];
$nim_mahasiswa_2 = $_POST['NIM2'];
$nama_mahasiswa_2 = $_POST['nama2'];
$nim_mahasiswa_3 = $_POST['NIM3'];
$nama_mahasiswa_3 = $_POST['nama3'];
$id_pembimbing = $_POST['IDPem'];
$nama_pembimbing = $_POST['namaPem'];
$id_penguji_1 = $_POST['IDPenguji1'];
$nama_penguji_1 = $_POST['namaPenguji1'];
$id_penguji_2 = $_POST['IDPenguji2'];
$nama_penguji_2 = $_POST['namaPenguji2'];
$jad_prasem = $_POST['jadprasem'];
$jad_sem = $_POST['jadsem'];
$jad_prasid = $_POST['jadprasid'];
$jad_sid = $_POST['jadsid'];

$database->insert("kelompok", [
    "prodi" => $prodi,
    "id_kelompok" => $id_kelompok,
    "angkatan" => $angkatan,
    "nim_mahasiswa_1" => $nim_mahasiswa_1,
    "nama_mahasiswa_1" => $nama_mahasiswa_1,
    "nim_mahasiswa_2" => $nim_mahasiswa_2,
    "nama_mahasiswa_2" => $nama_mahasiswa_2,
    "nim_mahasiswa_3" => $nim_mahasiswa_3,
    "nama_mahasiswa_3" => $nama_mahasiswa_3,
    "id_pembimbing" => $id_pembimbing,
    "nama_pembimbing" => $nama_pembimbing,
    "id_penguji_1" => $id_penguji_1,
    "nama_penguji_1" => $nama_penguji_1,
    "id_penguji_2" => $id_penguji_2,
    "nama_penguji_2" => $nama_penguji_2,
    "jad_prasem" => $jad_prasem,
    "jad_sem" => $jad_sem,
    "jad_prasid" => $jad_prasid,
    "jad_sid" => $jad_sid,
]);

header("Location: index.php");


