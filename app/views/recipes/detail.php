<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php 
use Core\Helpers;

?>

<?php $this->start('body'); ?>
    <section id="recipe-detail">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= PROJECT_ROOT; ?>recipes">Recipes</a></li>
          <li class="breadcrumb-item active" aria-current="page"> <?= Helpers::truncate($this->recipe[0]->name, 20); ?></li>
        </ol>
      </nav>

      <div class="recipe-detail-body">

      <div class="recipe-detail-img position-relative d-flex align-items-end" style="background-image: url('<?= STATIC_FILES; ?>/images/<?= $this->recipe[0]->image; ?>');">
          <div class="recipe-detail-box position-absolute px-3 py-2 mx-2 my-2 shadow bg-white">
          <h5 class="recipe-detail-title"> <?= Helpers::truncate($this->recipe[0]->name, 20); ?></h5>
            <span class="recipe-detail-chef">by <a href="<?= PROJECT_ROOT; ?>user/detail/<?= $this->recipe[0]->user_id; ?>"><?= $this->recipe[0]->first_name; ?> <?= $this->recipe[0]->last_name; ?></a></span>
          </div>
        </div>

        <div class="row">

          <div class="card-body col-xs-12 col-md-6">
            <h5 class="card-title">Ingredients</h5>
            <ul class="list-group">
              <?php foreach($this->recipe as $ingredient): ?>
              <li class="list-group-item">
                <?= $ingredient->amount; ?> 
                <?= $ingredient->unit; ?> of 
                <?= $ingredient->ingredient_name; ?> 
              </li>
              <?php endforeach; ?>
            </ul>
          </div>

          <div class="card-body col-xs-12 col-md-6">
            <h5 class="card-title">Instruction</h5>
            <p class="text-left">
              <?= $this->recipe[0]->instruction; ?> 
            </p>
          </div>

        </div>

      </div>
    </section>

<?php $this->end(); ?>

