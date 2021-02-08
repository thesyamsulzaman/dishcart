<?php

namespace App\Controllers;
use Core\Controller;
use Core\Helpers;

class CategoriesController extends Controller {
  public function __construct($controller, $action) {
    parent::__construct($controller, $action);
  }

  public function indexAction() {
    $this->view->render('categories/index');
  }



}

?>
