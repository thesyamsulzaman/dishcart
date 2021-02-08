<?php 

	namespace App\Models;

	use Core\Model;
  use Core\Database;
  use Core\Helpers;

	class Recipes extends Model {

		public $id, $first_name, $last_name, $name, $rate;
		public function __construct() {
			$table = "recipes";
			parent::__construct($table);
			$this->_softDelete = true;
      $this->db = Database::getInstance();
		}
		
		public function validator() {
			$this->runValidation(new RequiredValidator($this, ['field' => 'first_name', 'message' => 'First Name is required']));
			$this->runValidation(new RequiredValidator($this, ['field' => 'last_name', 'message' => 'Last Name is required']));
			$this->runValidation(new RequiredValidator($this, ['field' => 'major', 'message' => 'You need to specify the major']));
		} 

		public function findAllRecipes($category = '',$params = []) {

      $sql = '
       SELECT
       	recipes.id,
        recipes.image,
        recipes.name,
        users.id AS user_id,
        users.first_name,
        users.last_name,
        ratings.rate
       FROM
        recipes
       JOIN ratings ON ratings.recipe_id = recipes.id
       LEFT JOIN users on users.id = recipes.user_id';

			return $this->db->query($sql)->results();

		}

		public function findSingleRecipe($id = '',$params = []) {
			$sql = "
			SELECT
				users.first_name,
		    users.last_name,
        users.id AS user_id,
		    recipes.*,
		    measurement_quantity.amount,
		    measurement_units.description AS unit,
			  ingredients.name AS ingredient_name			
  		FROM
			    recipes
			JOIN users ON users.id = recipes.user_id
			JOIN recipe_ingredients ON recipe_ingredients.recipe_id = recipes.id
			JOIN ingredients ON ingredients.id = recipe_ingredients.ingredient_id
			JOIN measurement_units ON measurement_units.id = recipe_ingredients.measurement_unit_id
			JOIN measurement_quantity ON measurement_quantity.id = recipe_ingredients.measurement_quantity_id
			WHERE recipes.id = " . $id . " ";

			return $this->query($sql)->results();

		}

		//public function findAllRecipes($category = '') {

      //return $this->query(
       //)->results();

		//}



	}
 ?>
