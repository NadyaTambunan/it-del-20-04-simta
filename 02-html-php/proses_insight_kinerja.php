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
    header("Location: insightkinerja.php");
    exit;
}

$period = $_POST["period"];
$overview = $_POST["overview"];

$database->insert("period", [
    "overview" => $overview,
]);

header("Location: index.php");

?>