
<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

use Core\Database;

require_once("../../config/config.php");
require_once("../../core/Database.php");

$data = [
  ["description" => "Spoon"],
  ["description" => "Tea Spoon"],
  ["description" => "Sprinkle"],
  ["description" => "Clove"],
  ["description" => "Cups"],
  ["description" => "Cup"],
  ["description" => "Shot"],
];

$db = Database::getInstance();
foreach($data as $entity) {
  echo "[backend] Data Insertion Success \n";
  $db->insert("measurement_units", $entity);
}




?>
