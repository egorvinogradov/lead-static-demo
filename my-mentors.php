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
            $items = get_json('my-mentors');
            foreach ($items as $item) { ?>

              <div class="col-sm-9">
                <a href="/users/<?php echo $item->id ?>">
                  <div>
                    <div class="panel panel-user-card null">
                      <div class="panel-heading b-mentors-card-8">
                        <div class="row">
                          <div class="col-sm-3">
                            <img class="thumb-lg img-user-card" alt="" src="<?php echo $item->picture_url ?>">
                          </div>
                          <div class="col-sm-9 text-left user-card-props">
                            <b style="font-size: 16px;">
                              <?php echo $item->first_name ?>
                              <?php echo $item->last_name ?>
                            </b>
                            <p style="font-weight: normal; text-transform: none;" class="b-mentors-card-9">
                              <?php echo join(' at ', [$item->job_title, $item->company_name]) ?>
                            </p>
                            <div class="b-mentors-card-10">
                              <table class="table-props">
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
                            <a href="<?php echo $item->linkedin_profile_link ?>" target="_blank">
                              <i class="fa fa-linkedin-square linkedin-color"></i>
                            </a>
                            &nbsp;
                          </p>
                        </div>
                      </div>
                      <div class="panel-body">
                        <div>
                          <div class="pull-right btn-bottom-right2" style="margin-right: 0px;">
                            <button class="btn btn-info">
                              View History &amp; Rate
                              <?php echo $item->first_name ?>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              
          <?php } ?>

        </div>
      </div>
    </div>
  </div>
</div>

<?php include_file('includes/footer') ?>
