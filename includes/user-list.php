<?php include_once '../config.php' ?>
<?php foreach ($include_data['users'] as $item) { ?>

  <div class="<?php echo $include_data['container_class_name'] ? $include_data['container_class_name'] : 'col-sm-12' ?>">

      <div class="panel panel-user-card <?php echo $item->mentorship_request_sent ? 'request-mentor' : '' ?>">
        <div class="panel-heading b-mentors-card-8">
          <div class="row">

            <div class="col-md-4 col-lg-3 b-mentors-card-6">
              <a href="/users/<?php echo $item->index ?>/profile">
                <img class="thumb-lg img-user-card" alt="" src="<?php echo $item->picture_url ?>">
              </a>
            </div>

            <a class="col-md-8 col-lg-9 text-left user-card-props" href="/users/<?php echo $item->index ?>/profile">
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
            </a>

            <p class="pull-right labels-top-right">
              <a href="#" target="_blank">
                <i class="fa fa-linkedin-square linkedin-color"></i>
              </a>
            </p>
          </div>
        </div>

        <div class="panel-body">
          <div class="pull-right btn-bottom-right2 m-r-0">

            <?php if ( $include_data['is_user_profile'] ) { ?>
              <button class="btn btn-info b-request-mentorship-button">Ask to become your mentor</button>
            <?php } else { ?>
              <?php if ( $item->mentorship_request_sent ) { ?>
                <a class="btn btn-success green" href="/users/<?php echo $item->index ?>/profile">
                  View Mentorship Request
                </a>
              <?php } else if ($item->relationship == 'mentor' || $item->relationship == 'mentee') { ?>
                <a class="btn btn-info" href="/users/<?php echo $item->index ?>/rating">
                  View History &amp; Rate
                  <?php echo $item->first_name ?>
                </a>
              <?php } else { ?>
                <button class="btn btn-info b-request-mentorship-button">Ask to become your mentor</button>
              <?php } ?>
            <?php } ?>

          </div>
        </div>
      </div>

  </div>

<?php } ?>
