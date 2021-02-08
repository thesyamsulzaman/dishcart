<?php $this->start('head'); ?>
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<section id="dashboard">
  <div class="row">

    <div class="col-xs-12 col-lg-4">
      <div class="card">
        <div class="card-header">
          Dashboard
        </div>
        <ul class="list-group">
          <li class="list-group-item">
            Users
            <span class="badge badge-secondary ml-6 float-right">23</span>
          </li>
          <li class="list-group-item">
            Recipes<span class="badge badge-secondary ml-6 float-right">23</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="col-xs-12 col-lg-8 my-3 my-lg-0">
      <div class="card">
        <div class="card-header">
          Overview
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
          </blockquote>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-lg-12 my-4 ">
      <div class="card">
        <div class="card-header">
          Users
        </div>
        <div class="card-body">
          <table class="table table-borderless table-hover table-responsive-xs">
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Joined</th>
                <th></th>
              </tr>
              <tr>
                <td>Jill Smith</td>
                <td>jillsmith@gmail.com</td>
                <td>Dec 12, 2016</td>
                <td>
                  <button class="btn btn-primary">Edit</button>
                  <button class="btn btn-danger">Delete</button>
                </td>
              </tr>
              <tr>
                <td>Eve Jackson</td>
                <td>ejackson@yahoo.com</td>
                <td>Dec 13, 2016</td>
                <td>
                  <button class="btn btn-primary">Edit</button>
                  <button class="btn btn-danger">Delete</button>
                </td>
 
              </tr>
              <tr>
                <td>John Doe</td>
                <td>jdoe@gmail.com</td>
                <td>Dec 13, 2016</td>
                 <td>
                  <button class="btn btn-primary">Edit</button>
                  <button class="btn btn-danger">Delete</button>
                </td>
              </tr>
              <tr>
                <td>Stephanie Landon</td>
                <td>landon@yahoo.com</td>
                <td>Dec 14, 2016</td>
                 <td>
                  <button class="btn btn-primary">Edit</button>
                  <button class="btn btn-danger">Delete</button>
                </td>
              </tr>
              <tr>
                <td>Mike Johnson</td>
                <td>mjohnson@gmail.com</td>
                <td>Dec 15, 2016</td>
                 <td>
                  <button class="btn btn-primary">Edit</button>
                  <button class="btn btn-danger">Delete</button>
                </td>

                
              </tr>
          </table>
        </div>
      </div>
    </div>


    


  </div>
</section>

<?php $this->end(); ?>
