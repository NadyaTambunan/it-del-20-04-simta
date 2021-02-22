<?php

include_once("session.php");
include_once("vendor/autoload.php");
if ($_SESSION["loggedIn"]) {
    header("Location: index.php");
    exit;

}

$loader = new Twig_Loader_Filesystem("01-html-css");
$twig = new Twig_Environment($loader);
$template = $twig->load('UpdateUploadLaporan.html');
echo $template->render();

?>