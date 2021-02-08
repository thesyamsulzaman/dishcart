
<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>

<?php 
use Core\Helpers;
?>

<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" style="max-height: 300px;">
      <div class="banner-overlay"></div>
      <img src="<?= STATIC_FILES; ?>images/pexels-fox-1320917.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
    </div>
    <div class="carousel-item" style="max-height: 300px;">
      <div class="banner-overlay"></div>
      <img
      src="<?= STATIC_FILES; ?>/images/appetizing-pizza-with-shrimps-and-champignon-on-wooden-table-4553111.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" style="max-height: 300px;">
      <div class="banner-overlay"></div>
      <img
      src="<?= STATIC_FILES; ?>images/salad-bowl-with-steamed-veggies-and-red-rice-on-table-in-4551835.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
 -->
<!--<section id="banner" class="container mt-2">-->
  <!--<div class="banner-image">-->
    <!--<h1 class="banner-text">Brand <br> New Recipes </h1>-->
    <!--<div class="banner-overlay"></div>-->
  <!--</div>-->
<!--</section>-->

<section id="recipes" class="">
  <div class="card-deck">



    <?php foreach($this->recipes as $recipe): ?>

    <div class="card h-100 mt-2" style="min-width:280px;">
    <img src="<?= STATIC_FILES; ?>/images/<?= $recipe->image; ?>" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title"> <a class="card-title-link"
        href="<?= PROJECT_ROOT; ?>recipes/detail/<?= $recipe->id; ?>"><?= $recipe->name; ?></a></h5>
        <div class="card-rate d-flex justify-content-between align-items-start">
          <div class="d-flex align-items-center">
            <img src="<?= STATIC_FILES; ?>icons/star-filled.svg" alt="" width="18">
            <span class="ml-2">3/5</span>
          </div>
          <a class="card-rate-name" href="<?= PROJECT_ROOT; ?>user/detail/<?= $recipe->user_id; ?>"> by <?= $recipe->first_name; ?> <?= $recipe->last_name; ?></a>
        </div>
      </div>
    </div>

    <?php endforeach; ?>
      

  </div>
</section>



<?php $this->end(); ?>
