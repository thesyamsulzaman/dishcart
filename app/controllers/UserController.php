<?php

namespace App\Controllers;
 	
use App\Models\Users;	

use Core\Controller;
use Core\Helpers;
use Core\Database;
use Core\Router;


class UserController extends Controller {
  public function __construct($controller, $action) {
    parent::__construct($controller, $action);
    $this->load_model("Users");
  }

  public function detailAction($id) {
    $user = $this->UsersModel->getUserInfo($id);
    $this->view->user = $user;
  	$this->view->render('user/detail');
  }

  public function loginAction() {
  	$this->data = $this->UsersModel->login();
    $this->view->render('user/login');
  }

  public function registerAction() {
  	$newUser = new Users();
  	if ($this->request->isPost()) {
  		$this->request->csrfCheck();
  		$newUser->assign($this->request->get());
  		$newUser->setConfirmedPassword($this->request->get('confirm_password'));
			if ($newUser->save()) {
				Router::redirect("user/login");
			}
  	}

    $this->view->render('user/register');
  }

  public function logoutAction() {
    $this->view->render('user/login');
  }



}

?>
