<?php include_once 'config.php' ?>
<?php include_file('includes/header') ?>
<?php include_file('includes/navbar', [title=> 'My Mentors']) ?>
<?php include_file('includes/sidebar', [tab => 'my-mentors']) ?>

<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="row">

          <?php
            include_file('includes/user-list', [
              users => get_users('mentor'),
              container_class_name => 'col-sm-9',
            ]);
          ?>

        </div>
      </div>
    </div>
  </div>
</div>

<?php include_file('includes/footer') ?>
