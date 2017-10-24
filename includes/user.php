<?php include_once '../config.php' ?>

<?php
$user_id = $include_data['user_id'];
$item = get_users_by_ids($user_id);
$page_title = $include_data['is_my_profile'] ? 'My Profile' : 'Profile';
?>

<?php include_file('includes/header') ?>
<?php include_file('includes/navbar', [title => $page_title]) ?>
<?php include_file('includes/sidebar') ?>


<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <?php if ( $item->mentorship_request_sent ) { ?>
          <div class="b-profile-request-0 white-box clearfix m-b-20 b-profile-request-message">
            <p class="font-bold m-b-15 b-profile-request-1">
              <?php echo $item->first_name ?> sent you a mentorship request
            </p>
            <div class="b-profile-request-3">
              <p>Hi, Kate!</p>
              <p>
                My name is Sophia, I went to the same school as you, University of Wisconsin–Madison, and recently graduated.
                This is my first job after graduation and I'm looking for people with experience such as yours who could give me a piece of advice how to get started the right way.
              </p>
              <p>
                Lead suggested that you might help with it. Would it be possible to request your mentorship on this? I would appreciate your help.
                <br>
                Thank you!
              </p>
            </div>
            <hr>
            <div class="pull-right btn-bottom-right2 m-r-0">
              <button class="btn btn-success green m-r-20 b-profile-request-accept">
                Yes, Become <?php echo $item->first_name ?>'s Mentor
              </button>
              <button class="btn btn-default b-profile-request-reject">Reject Request</button>
            </div>
          </div>
        <?php } ?>

        <div class="white-box">
          <div class="row">

            <div class="col-md-3 user-left">
              <img class="img-responsive " alt="User image" src="<?php echo $item->picture_url ?>">
              <div class="user-mentors">Mentors</div>
              <div>
                <a class="opinion-images b-profile-50" href="/users/<?php echo $item->index ?>/mentors">
                  <?php echo output_reply_images($item->mentors) ?>
                </a>
              </div>
              <div class="user-mentees">Mentees</div>
              <div>
                <a class="opinion-images b-profile-50" href="/users/<?php echo $item->index ?>/mentees">
                  <?php echo output_reply_images($item->mentees) ?>
                </a>
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
                        <button
                          class="btn btn-default m-r-15 b-profile-request-label <?php echo $item->mentorship_request_sent ? 'hidden' : '' ?>">
                          <?php echo $item->first_name ?> is your <?php echo $item->relationship ?>
                        </button>
                      <?php } else { ?>
                        <button class="btn btn-info b-request-mentorship-button m-r-15">
                          Ask <?php echo $item->first_name ?> to become your mentor
                        </button>
                      <?php } ?>

                      <a class="btn btn-info" href="/users/<?php echo $item->index ?>/messages">
                        Send a Message
                      </a>
                    </div>
                  <?php } else { ?>
                    <br>
                  <?php } ?>


                  <ul class="nav nav-tabs">
                    <li class="<?php echo $include_data['tab'] == 'profile' ? 'active' : '' ?>">
                      <a href="/users/<?php echo $item->index ?>/profile">
                        <?php echo ($include_data['is_my_profile'] ? 'Your' : $item->first_name . '\'s') . ' Feed' ?>
                      </a>
                    </li>

                    <?php if ( !$include_data['is_my_profile'] ) { ?>
                      <li class="<?php echo $include_data['tab'] == 'mentors' ? 'active' : '' ?>">
                        <a href="/users/<?php echo $item->index ?>/mentors">Mentors</a>
                      </li>
                      <li class="<?php echo $include_data['tab'] == 'mentees' ? 'active' : '' ?>">
                        <a href="/users/<?php echo $item->index ?>/mentees">Mentees</a>
                      </li>
                    <?php } ?>

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
                  <?php
                    $template_id = $include_data['tab'];
                    if ($include_data['tab'] === 'mentors' || $include_data['tab'] === 'mentees') {
                      $template_id = 'network';
                    }
                    include_file('includes/user-' . $template_id, [
                      user => $item,
                      tab => $include_data['tab'],
                    ]);
                  ?>
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
