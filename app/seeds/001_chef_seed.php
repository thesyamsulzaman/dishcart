<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

use Core\Database;

require_once("../../config/config.php");
require_once("../../core/Database.php");

$data = [
  [ "user_id" => 2 ],
  [ "user_id" => 3 ],
];

$db = Database::getInstance();
foreach($data as $entity) {
  echo "[backend] Data Insertion Success \n";
  $db->insert("chef", $entity);
}


?>
