<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>

  <section id="chef-detail" class="">
    <div class="card chef-detail-card position-relative">
      <img class="card-img-top profile-cover-picture position-relative mb-5" src="<?= PROJECT_ROOT; ?>uploads/<?= $this->user[0]->cover_picture; ?>" alt="">
      <img class="profile-picture position-absolute" alt="" src="<?= PROJECT_ROOT; ?>uploads/<?= $this->user[0]->profile_picture; ?>" >

      <div class="card-body position-relative row mt-3">
        <div class="card-body col-xs-12 col-md-6">
        <h3 class="card-title">About <?= $this->user[0]->first_name; ?></h3>
          <p class="card-text"> 
             <?= $this->user[0]->about; ?>`
          </p>
        </div>

        <div class="card-body col-xs-12 col-md-6">
          <h3 class="card-title">Recipes</h3>
            <ul class="list-group">
            <?php foreach($this->user as $user_recipe): ?>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                <?= $user_recipe->name; ?>
                  <div class="d-flex align-items-center">
                    <img src="<?= STATIC_FILES; ?>icons/star-filled.svg" alt="" width="18">
                    <span class="ml-2">3/5</span>
                  </div>
              </li>
             <?php endforeach; ?>

            </ul>
        </div>


        </div>
      </div>
    </div>

  </section>


<?php $this->end(); ?>
