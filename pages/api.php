<?php

use lib\redDirectory;

include "lib/redDirectory.php";
 
$UserName = $_GET["user"];

$a = []; 
$baseUrl = 'public/video/' . $UserName . "/";
$dir = new redDirectory();
$dir->redDirectoryByPath($baseUrl, $a);
foreach ($a as $key => $value) {
    $a[$key] = $_SERVER["REQUEST_SCHEME"] ."://". $_SERVER['HTTP_HOST'] . "/" . $value;
}
echo json_encode($a, JSON_UNESCAPED_UNICODE);
