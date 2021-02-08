<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

use Core\Database;
use Core\Model;

require_once("../../config/config.php");
require_once("../../core/Database.php");
require_once("../../core/Model.php");



class Recipes extends Model {

  public $id, $first_name, $last_name, $name, $rate;
  public function __construct() {
    $table = "students";
    parent::__construct($table);
    $this->_softDelete = true;
  }
  

  public function findData() {
    return ["hello" => "World"];
  }

  public function findAllRecipes($category = '', $params = []) {
    $conditions = [
      'conditions' => 'user_id = ?', 
      'bind' => [$user_id],
    ];

    $conditions = array_merge($conditions, $params);
    return $this->find($conditions);
  }


}


$db = Database::getInstance();
$RecipesModel = new Recipes();
$db->query('
    SELECT
        recipes.image,
        recipes.name,
        users.first_name,
        users.last_name,
        ratings.rate
    FROM
        recipes
    JOIN ratings ON ratings.recipe_id = recipes.id
    LEFT JOIN users on users.id = recipes.user_id
');
$recipes =  $RecipesModel->findAllRecipes();

//foreach($recipes as $recipe) {
  //var_dump($recipe->findData());
//}
var_dump($recipes);




?>
