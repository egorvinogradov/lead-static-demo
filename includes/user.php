<?php include_once '../config.php' ?>

<?php
$user_id = $include_data['user_id'];
$item = get_user_by_index($user_id);
?>

<?php include_file('includes/header') ?>
<?php include_file('includes/navbar', [title => 'Profile']) ?>
<?php include_file('includes/sidebar') ?>


<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="white-box">
          <div class="row">


            <div class="col-md-3 user-left">
              <img class="img-responsive " alt="User image" src="<?php echo $item->picture_url ?>">
              <div class="user-mentors">Mentors</div>
              <div>
                <div class="opinion-images">
                  <?php echo output_reply_images([7,8,9,10,12], 'and 6 more') ?>
                </div>
              </div>
              <div class="user-mentees">Mentees</div>
              <div>
                <div class="opinion-images">
                  <?php echo output_reply_images([3,4,5,15,18], 'and 1 more') ?>
                </div>
              </div>
            </div>


            <div class="col-md-9">

              <p class="pull-right labels-top-right" style="top: 0px; right: 5px;">
                <a href="<?php echo $item->linkedin_profile_link ?>" target="_blank">
                  <i class="fa fa-linkedin-square linkedin-color"></i>
                </a>
              </p>

              <div>
                <div style="margin-left: 10px;">
                  <b style="font-size: 16px; text-transform: uppercase;">
                    <?php echo $item->first_name ?>
                    <?php echo $item->last_name ?>
                  </b>
                  <?php if ( $item->is_mentor ) { ?>
                    <span class="m-l-5 label label-rouded label-success profile-card-label">Mentor</span>
                  <?php } ?>
                  <p style="font-weight: normal; text-transform: none;" class="b-mentors-card-9">
                    <?php echo join(' at ', [$item->job_title, $item->company_name]) ?>
                  </p>
                  <div class="b-mentors-card-10 b-profile-9">
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


                  <?php if ( !$include_data['is_my_profile'] ) { ?>
                    <div class="m-b-30">
                      <?php if ($item->relationship == 'mentor' || $item->relationship == 'mentee' || $include_data['tab'] == 'rating') { ?>
                        <button class="btn btn-default">
                          <?php echo $item->first_name ?> is your <?php echo $item->relationship ?>
                        </button>
                      <?php } else { ?>
                        <button class="btn btn-info b-request-mentorship-button">
                          Ask <?php echo $item->first_name ?> to become your mentor
                        </button>
                      <?php } ?>

                      <a class="btn btn-info m-l-15" href="/users/<?php echo $item->index ?>/messages">
                        Send a Message
                      </a>
                    </div>
                  <?php } else { ?>
                    <br>
                  <?php } ?>


                  <ul class="nav nav-tabs">
                    <li class="<?php echo $include_data['tab'] == 'profile' ? 'active' : '' ?>">
                      <a href="/users/<?php echo $item->index ?>/profile"><?php echo $item->first_name ?>'s Feed</a>
                    </li>

                    <?php if ($item->has_messages || $include_data['tab'] == 'messages') { ?>
                      <li class="<?php echo $include_data['tab'] == 'messages' ? 'active' : '' ?>">
                        <a href="/users/<?php echo $item->index ?>/messages">
                          Messages
                          <?php if ( $item->unread_messages_count ) { ?>
                            <span class="label label-success label-rounded b-profile-40">
                              <?php echo $item->unread_messages_count ?>
                            </span>
                          <?php } ?>
                        </a>
                      </li>
                    <?php } ?>

                    <?php if ($item->relationship == 'mentor' || $item->relationship == 'mentee' || $include_data['tab'] == 'rating') { ?>
                      <li class="<?php echo $include_data['tab'] == 'rating' ? 'active' : '' ?>">
                        <a href="/users/<?php echo $item->index ?>/rating">Rating</a>
                      </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>

              <div class="col-md-12 col-xs-12">
                <div class="white-box b-profile-22">
                  <?php include_file('includes/user-' . $include_data['tab'], [user => $item]) ?>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include_file('includes/footer') ?>
