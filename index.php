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
                <div class="form-group">
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
                $items = get_users('stranger');
                foreach ($items as $item) { ?>

                <div>
                  <div class="col-md-12 col-sm-12">

                    <a href="/users/<?php echo $item->index ?>/profile">
                      <div>
                      <div class="panel panel-user-card null">
                        <div class="panel-heading b-mentors-card-8">
                          <div class="row">
                            <div class="col-md-4 col-lg-3 b-mentors-card-6">
                              <img class="thumb-lg img-user-card" alt="" src="<?php echo $item->picture_url ?>">
                            </div>
                            <div class="col-md-8 col-lg-9 text-left user-card-props">
                              <b style="font-size: 16px;">
                                <?php echo $item->first_name ?>
                                <?php echo $item->last_name ?>
                              </b>
                              <p style="font-weight: normal; text-transform: none;" class="b-mentors-card-9">
                                <?php echo join(' at ', [$item->job_title, $item->company_name]) ?>
                              </p>
                              <div class="b-mentors-card-10">
                                <table class="table-props m-b-20">
                                  <tbody>
                                  <tr>
                                    <td><span class="gray"><i class="fa fa-folder-open"></i></span></td>
                                    <td><span class="gray">Industry:</span></td>
                                    <td class="text-left">
                                      <?php echo $item->industry ?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td><span class="gray"><i class="fa fa-location-arrow"></i></span></td>
                                    <td><span class="gray">Location:</span></td>
                                    <td class="text-left">
                                      <?php echo $item->location->name ?>
                                    </td>
                                  </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <p class="pull-right labels-top-right">
                              <a href="#" target="_blank">
                                <i class="fa fa-linkedin-square linkedin-color"></i>
                              </a>
                              &nbsp;
                            </p>
                          </div>
                        </div>
                        <div class="panel-body">
                          <div>
                            <div class="pull-right btn-bottom-right2" style="margin-right: 0px;">
                              <button class="btn btn-info b-request-mentorship-button">Ask to become your mentor</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </a>
                  </div>
                </div>

              <?php } ?>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_file('includes/footer') ?>
