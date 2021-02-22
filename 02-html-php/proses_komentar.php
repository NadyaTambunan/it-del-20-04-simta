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

$datas = $database->select("id_laporan, judul_laporan, tanggal, kelompok, sesi FROM artefak");
$result = $conn->query($sql);

if ($result->num_rows > 0){
  while($row=$result->fetch_assoc()) {
    echo "ID: " . $row["id_laporan"]. "- Judul: " . $row["judul_laporan"]. "- Tanggal: " . $row["tanggal"]. "- Kelompok: " . $row["kelompok"]. "- Sesi: " . $row["sesi"]. "<br/>";
  }
} else{
  echo "0 results";
}
$conn->close();

$id_komentar = $_POST["id"];
$isi_komentar = $_POST['isi'];
$nim_mahasiswa = $_POST['nim'];
$nama_mahasiswa = $_POST['nama'];

$database->insert("komentar", [
    "id_komentar" => $id,
    "isi_komentar" => $isi,
    "nim_mahasiswa" => $nim,
    "nama_mahasiswa" => $nama,
]);

header("Location: index.php");