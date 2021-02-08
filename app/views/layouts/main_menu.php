<?php

use Core\Router;
use Core\Helpers;

use App\Models\Users;

$menu = Router::get_menu('menu_acl');
$currentPage = Helpers::currentPage();


function activePage($routePath, $currentPage) {
  return $routePath == $currentPage ? 'active' : '' ;
}

?>

<header id="header" class="container mt-4">
  <nav class="navbar fixed-top navbar-light bg-light navbar-expand-lg">
  <a class="navbar-brand" href="<?= $menu["Home"]; ?>">
      <img src="<?= STATIC_FILES;?>/icons/icon.png" alt="" width="150">
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav">
        <li class="nav-item <?= activePage($menu["Categories"], $currentPage); ?>">
          <a class="nav-link" href="<?= $menu["Categories"]; ?>">Categories</a>
        </li>
        <li class="nav-item <?= activePage($menu["Recipes"], $currentPage); ?>">
          <a class="nav-link" href="<?= $menu["Recipes"]; ?>">Recipes </a>
        </li>
      </ul>

      <form class="form-inline ml-auto border-bottom border-dark">
          <input class="btn btn-outline-dark my-2 my-sm-0 search-button"
          type="submit" value="" style="background-image: url('<?= STATIC_FILES;?>/icons/search-alt.svg')"/>
          <input class="ml-2 w-auto form-control form-borderless mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      </form>


      <ul class="navbar-nav my-2 ml-lg-2 my-lg-0">
        
        <li class="nav-item <?= activePage($menu["Login"], $currentPage); ?>">
          <a class="nav-link" href="<?= $menu["Login"]; ?>">Login</a>
        </li>
        <li class="nav-item <?= activePage($menu["Register"], $currentPage); ?>">
          <a class="nav-link" href="<?= $menu["Register"]; ?>">Register </a>
        </li>
       
<!--          <li class="nav-item active">
          <a class="nav-link profile-card-toggle">Hi, Syamsul </a>
          <div class="card profile-card position-absolute bg-light shadow-lg rounded">
            <button type="button" class="btn btn-dark btn-sm position-absolute exit-button" name="button">X</button>
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <a href="#" class="text-center">Profile</a>
                </li>
                <li class="list-group-item">
                  <a href="<?= PROJECT_ROOT; ?>dashboard/" class="text-center">Dashboard</a>
                </li>
              </ul>
              <ul class="list-group list-group-flush ">
                <li class="list-group-item ">
                  <a href="#" class="btn btn-block btn-danger">
                    Logout
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </li>
 -->

      </ul>

    </div>
  </nav>
</header>
