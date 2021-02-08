<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

use Core\Database;

require_once("../../config/config.php");
require_once("../../core/Database.php");

$data = [
  [
    "recipe_id" => 1,
    "measurement_unit_id" => 1,
    "measurement_quantity_id" => 8,
    "ingredient_id" => 36,
  ],
  [
    "recipe_id" => 1,
    "measurement_unit_id" => 3,
    "measurement_quantity_id" => 3,
    "ingredient_id" => 39,
  ],
  [
    "recipe_id" => 1,
    "measurement_unit_id" => 5,
    "measurement_quantity_id" => 4,
    "ingredient_id" => 35,
  ],
  [
    "recipe_id" => 2,
    "measurement_unit_id" => 2,
    "measurement_quantity_id" => 4,
    "ingredient_id" => 31,
  ],
  [
    "recipe_id" => 2,
    "measurement_unit_id" => 7,
    "measurement_quantity_id" => 5,
    "ingredient_id" => 35,
  ],
  [
    "recipe_id" => 2,
    "measurement_unit_id" => 4,
    "measurement_quantity_id" => 3,
    "ingredient_id" => 35,
  ],
  [
    "recipe_id" => 3,
    "measurement_unit_id" => 5,
    "measurement_quantity_id" => 3,
    "ingredient_id" => 38,
  ],
  [
    "recipe_id" => 3,
    "measurement_unit_id" => 7,
    "measurement_quantity_id" => 4,
    "ingredient_id" => 41,
  ],
  [
    "recipe_id" => 3,
    "measurement_unit_id" => 1,
    "measurement_quantity_id" => 5,
    "ingredient_id" => 35,
  ],
  [
    "recipe_id" => 4,
    "measurement_unit_id" => 2,
    "measurement_quantity_id" => 6,
    "ingredient_id" => 35,
  ],
  [
    "recipe_id" => 4,
    "measurement_unit_id" => 4,
    "measurement_quantity_id" => 8,
    "ingredient_id" => 31,
  ],
  [
    "recipe_id" => 4,
    "measurement_unit_id" => 6,
    "measurement_quantity_id" => 3,
    "ingredient_id" => 43,
  ],

];

$db = Database::getInstance();
foreach($data as $entity) {
  echo "[backend] Data Insertion Success \n";
  $db->insert("recipe_ingredients", $entity);
}

//var_dump($data);

//var_dump($db->get_columns("ingredients"));




?>
