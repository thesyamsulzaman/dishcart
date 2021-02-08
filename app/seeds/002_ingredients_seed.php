<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

use Core\Database;

require_once("../../config/config.php");
require_once("../../core/Database.php");

$data = [
  ["name" => "Tomato"],
  ["name" => "Onion"],
  ["name" => "Lemon"],
  ["name" => "Rice"],
  ["name" => "Egg"],
  ["name" => "Butter"],
  ["name" => "Chiken Breast"],
  ["name" => "Honey"],
  ["name" => "Maple"],
  ["name" => "Bacon"],
  ["name" => "Beef"],
  ["name" => "Beans"],
  ["name" => "Sausage"],
  ["name" => "Cracker"],
  ["name" => "Bun"],
  ["name" => "Chilli"],
];

$db = Database::getInstance();
foreach($data as $ingredient) {
  echo "[backend] Data Insertion Success \n";
  $db->insert("ingredients", $ingredient);
}

//var_dump($data);

//var_dump($db->get_columns("ingredients"));




?>
