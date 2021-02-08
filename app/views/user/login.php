
<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>

<section id="login" class="">
  <div class="card mx-auto mt-3 shadow bg-white rounded" style="max-width: 450px;">
    <div class="card-header">
    <img src="<?= STATIC_FILES; ?>/icons/icon.png" alt="" width="150">
    </div>
    <div class="card-body">
      <form action="./index.html">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </form>
    </div>
    <div class="card-footer text-muted">
      &copy Syamsul Zaman
    </div>

  </div>
</section>



<?php $this->end(); ?>
