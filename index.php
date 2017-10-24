<?php include_once 'config.php' ?>
<?php include_file('includes/header') ?>
<?php include_file('includes/navbar', [title=> 'Find a Mentor']) ?>
<?php include_file('includes/sidebar', [tab => 'mentors']) ?>

<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-lg-3 col-md-3  col-sm-12 col-xs-12">
            <div class="white b-filters" style="overflow: hidden; padding-bottom: 0px;">
              <form class="form-horizontal" _lpchecked="1">
                <div class="form-group">
                  <div class="col-md-12">
                    <div class="radio radio-info">
                      <input type="radio" name="mentors" id="specificcompany" value="1" checked>
                      <label class="b-filters-1" for="specificcompany">
                        My Company Only
                      </label>
                    </div>
                    <div class="radio radio-info">
                      <input type="radio" name="mentors" id="allmentors" value="0">
                      <label class="b-filters-1" for="allmentors">
                        All Mentors
                      </label>
                    </div>
                    <div class="lead-delimiter" style="margin-top: 15px;"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12">Job title</label>
                  <div class="col-md-12">
                    <input type="text" value="" placeholder="Select..." class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12">Industry</label>
                  <div class="col-md-12">
                    <input type="text" value="" placeholder="Select..." class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-12">Location</label>
                  <div class="col-md-12">
                    <input type="text" value="" placeholder="Enter city..." class="form-control">
                  </div>
                </div>
                <div class="lead-delimiter" style="margin-top: 15px; margin-bottom: 15px;"></div>
                <div class="form-group">
                  <div class="col-md-6">
                    <label>
                      <div class="checkbox checkbox-info">
                        <input type="checkbox" id="radio1" value="on" checked>
                        <label for="radio1">Men</label>
                      </div>
                    </label>
                  </div>
                  <div class="col-md-6">
                    <label>
                      <div class="checkbox checkbox-info">
                        <input type="checkbox" id="radio2" value="on" checked>
                        <label for="radio2">Women</label>
                      </div>
                    </label>
                  </div>
                </div>
                <div class="lead-delimiter" style="margin-top: -10px; margin-bottom: 20px;"></div>
                <div class="form-group m-b-15">
                  <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-info btn-block">Search</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 b-mentors-card-7">
            <div class="row">

              <?php
                include_file('includes/user-list', [
                  users => get_users('stranger'),
                ]);
              ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_file('includes/footer') ?>
