<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

use Core\Database;

require_once("../../config/config.php");
require_once("../../core/Database.php");

$data = [
  [
    "name" => "Giouvarlakia", 
    "chef_id" => 2, 
    "category" => "beverage",
    "instruction" => "TestInstruction"
  ],
  [
    "name" => "Broke Bithc Pizza", 
    "chef_id" => 3, 
    "category" => "meal",
    "instruction" => "TestInstruction"
  ],
  [
    "name" => "Veggie Wet Salad", 
    "chef_id" => 3, 
    "category" => "meal",
    "instruction" => "TestInstruction"
  ],
  [ 
    "name" => "Big Bunn Frech Burger", 
    "chef_id" => 3, 
    "category" => "dish",
    "instruction" => "TestInstruction"
  ],
];

$db = Database::getInstance();
foreach($data as $ingredient) {
  echo "[backend] Data Insertion Success \n";
  $db->insert("recipes", $ingredient);
}

//var_dump($data);

//var_dump($db->get_columns("ingredients"));




?>
