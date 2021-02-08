<?php 

namespace App\Controllers;
use Core\Controller;
use Core\Helpers;
use App\Models\Recipes;

class RecipesController extends Controller {
	public function __construct($controller, $action) {
		parent::__construct($controller, $action);
		$this->load_model("Recipes");
	}

	public function indexAction() {
    $recipes = $this->RecipesModel->findAllRecipes();
    $this->view->recipes = $recipes;	
    $this->view->render('recipes/index');
	}

  public function detailAction($id) {
  	$recipe = $this->RecipesModel->findSingleRecipe($id);
    $this->view->recipe = $recipe;
    $this->view->render('recipes/detail');
  }


} 


 ?>
