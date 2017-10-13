<?php include_once 'config.php' ?>
<?php include_file('includes/header') ?>
<?php include_file('includes/navbar', [title=> 'My Mentees']) ?>
<?php include_file('includes/sidebar', [tab => 'my-mentees']) ?>

<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div>
          <div class="row">


            <?php
              $items = get_json('my-mentees');
              foreach ($items as $index=>$item) {
                $is_request = !$index; ?>

              <div class="col-sm-9">
                <a href="/users/<?php echo $item->id ?>">
                  <div>
                    <div class="panel panel-user-card <?php echo $is_request ? 'request-mentor' : '' ?>">
                      <div class="panel-heading">
                        <div class="row">
                          <div class="col-sm-3">
                            <img class="thumb-lg img-user-card" alt="" src="<?php echo $item->picture_url ?>">
                          </div>
                          <div class="col-sm-9 text-left user-card-props">
                            <b style="font-size: 16px;">
                              <?php echo $item->first_name ?>
                              <?php echo $item->last_name ?>
                            </b>
                            <p style="font-weight: normal; text-transform: none;">
                              <?php echo join(' at ', [$item->job_title, $item->company_name]) ?>
                            </p>
                            <div>
                              <table class="table-props">
                                <tbody>
                                <tr>
                                  <td><span class="gray"><i class="fa fa-briefcase"></i></span></td>
                                  <td><span class="gray">Industry:</span></td>
                                  <td class="text-left">
                                    <?php echo $item->industry ?>
                                  </td>
                                </tr>
                                <tr>
                                  <td><span class="gray"><i class="fa fa-map-marker"></i></span></td>
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
                            <?php if (!$is_request) { ?>
                              <button class="btn btn-info">
                                View History &amp; Rate
                                <?php echo $item->first_name ?>
                              </button>
                            <?php } else { ?>
                              <button class="btn btn-success green">
                                View Mentorship Request
                              </button>
                            <?php } ?>
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
</div>

<?php include_file('includes/footer') ?>
