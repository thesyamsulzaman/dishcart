
<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php

use Core\FormHelpers;

?>

<?php $this->start('body'); ?>

<section id="register" class="">
  <div class="card mx-auto mt-3" style="max-width: 450px;">
    <div class="card-header">
      <img src="<?= STATIC_FILES; ?>/icons/icon.png" alt="" width="150">
    </div>
    <div class="card-body">
      <form method="POST" action="<?= PROJECT_ROOT; ?>user/register">
        <div class="form-group">
           <?= FormHelpers::csrf_input(); ?>
        </div>
        <div class="form-group">
          <label for="">First Name</label>
          <input type="text" name="first_name" class="form-control" id="" aria-describedby="">
        </div>
        <div class="form-group">
          <label for="">Last name</label>
          <input type="text" name="last_name"  class="form-control" id="" aria-describedby="">
        </div>

        <div class="form-group">
          <label for="">Username</label>
          <input type="text" name="username"  class="form-control" id="" aria-describedby="">
        </div>

        <div class="form-group">
          <label for="">Email address</label>
          <input type="" class="form-control" name="email" id="" aria-describedby="">
        </div>

        <div class="form-group">
          <label for="">Password</label>
          <input type="password" class="form-control" name="password" id="">
        </div>


        <div class="form-group">
          <label for="">Confirm Password</label>
          <input type="password" class="form-control" name="confirm_password" id="">
        </div>

        <button type="submit" class="btn btn-primary btn-block">Register</button>
      </form>
    </div>
    <div class="card-footer text-muted">
      &copy Syamsul Zaman
    </div>

  </div>
</section>



<?php $this->end(); ?>
