<?php

namespace App\Controllers;
use Core\Controller;

class DashboardController extends Controller {

  public function __construct($controller, $action) {
    parent::__construct($controller, $action);
  }

  public function indexAction() {
    $this->view->render("dashboard/index");
  }
}

?>
