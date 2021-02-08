
<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

use Core\Database;

require_once("../../config/config.php");
require_once("../../core/Database.php");

$data = [
  [
    "username" => "samparker",
    "first_name" => "Syamsul",
    "last_name" => "Zaman",
    "email" => "thecardboardboyz@gmail.com",
    "password" => "satuduatiga",
  ], 
  [
    "username" => "ghoulmitten",
    "first_name" => "Charlie",
    "last_name" => "Kelly",
    "email" => "kittensmittens@gmail.com",
    "password" => "satuduatiga",
  ], 
  [
    "username" => "macthebadass",
    "first_name" => "Robert",
    "last_name" => "McDonald",
    "email" => "fisty@gmail.com",
    "password" => "satuduatiga",
  ], 
  [
    "username" => "jokeondee",
    "first_name" => "Deandra",
    "last_name" => "Reynolds",
    "email" => "birdie@gmail.com",
    "password" => "satuduatiga",
  ], 
];

$db = Database::getInstance();
foreach($data as $ingredient) {
  echo "[backend] Data Insertion Success \n";
  $db->insert("users", $ingredient);
}



?>
