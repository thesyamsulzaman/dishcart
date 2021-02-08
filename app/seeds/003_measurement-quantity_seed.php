<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

use Core\Database;

require_once("../../config/config.php");
require_once("../../core/Database.php");

$data = [
  ["amount" => ".5"],
  ["amount" => "1"],
  ["amount" => "1.5"],
  ["amount" => "2"],
  ["amount" => "2.5"],
  ["amount" => "3"],
  ["amount" => "3.5"],
  ["amount" => "4"],
  ["amount" => "4.5"],
  ["amount" => "5"],
  ["amount" => "5.5"],
  ["amount" => "6"],
  ["amount" => "6.5"],
  ["amount" => "6"],
];

$db = Database::getInstance();
foreach($data as $ingredient) {
  echo "[backend] Data Insertion Success \n";
  $db->insert("measurement_quantity", $ingredient);
}




?>
