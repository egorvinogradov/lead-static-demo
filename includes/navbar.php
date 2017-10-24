<?php include_once '../config.php' ?>
<?php

$current_user = get_global_var('current_user');
$notification_user_1 = get_users_by_ids(3);
$notification_user_2 = get_users_by_ids(16);

?>

<div>
  <nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"><a class="navbar-toggle hidden-sm hidden-md hidden-lg"><i class="ti-menu"></i></a>
      <div class="top-left-part"><a class="logo" href="/"><b style="font-weight: 500; letter-spacing: 0.05em;">LEAD</b></a>
      </div>
      <ul class="nav navbar-top-links navbar-right pull-right header-layout-right-block">

        <li class="dropdown b-notification-dropdown">
          <a class="b-notification-0 dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" aria-expanded="false">
            <i class="fa fa-envelope-o"></i>
            <div class="notify">
              <span class="b-notification-blink"></span>
              <span class="point"></span>
            </div>
          </a>
          <ul class="dropdown-menu mailbox animated">
            <li>
              <div class="drop-title b-notification-1">You have 2 notifications</div>
            </li>

            <li>
              <div class="message-center">
                <a href="/users/<?php echo $notification_user_1->index ?>/profile">
                  <div class="user-img">
                    <img src="<?php echo $notification_user_1->picture_url ?>" alt="user" class="img-circle">
                    <span class="profile-status online pull-right bg-danger"></span>
                  </div>
                  <div class="mail-contnet">
                    <h5 class="b-notification-2">
                      <?php echo $notification_user_1->first_name . ' ' . $notification_user_1->last_name ?>
                    </h5>
                    <span class="b-notification-3 mail-desc">Approved your mentorship request</span>
                  </div>
                </a>
              </div>
            </li>

            <li>
              <div class="message-center">
                <a class="b-notification-5" href="/users/<?php echo $notification_user_2->index ?>/profile">
                  <div class="user-img">
                    <img src="<?php echo $notification_user_2->picture_url ?>" alt="user" class="img-circle">
                    <span class="profile-status online pull-right bg-danger"></span>
                  </div>
                  <div class="mail-contnet">
                    <h5 class="b-notification-2">
                      <?php echo $notification_user_2->first_name . ' ' . $notification_user_2->last_name ?>
                    </h5>
                    <span class="b-notification-3 mail-desc">
                      Asked you to become her mentor
                    </span>
                  </div>
                </a>

              </div>
            </li>

          </ul>
          <!-- /.dropdown-messages -->
        </li>


        <li class="dropdown">
          <div class="profile-pic">
            <div class="dropdown btn-group">
              <button id="profile-card" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span>
                  <?php echo $current_user->first_name . ' ' . $current_user->last_name ?>
                  <span>&nbsp;
                    <span class="label label-rouded label-success profile-card-label">Mentor</span>
                  </span>
                </span>&nbsp;
                <span class="caret"></span>
              </button>
              <ul role="menu" class="dropdown-menu" aria-labelledby="profile-card">
                <li><a href="/my-profile">My Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="/dashboard">Dashboard</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Logout</a></li>
              </ul>
            </div>
          </div>
        </li>

      </ul>
    </div>
  </nav>

  <div class="row bg-title">
    <div class="col-lg-12">
      <h4 class="page-title" style="margin-left: 225px;font-size: 18px;font-weight: normal;margin-top: 3px;margin-bottom: 5px;">
        <span>
          <a>
            <?php echo $include_data['title'] ?>
          </a>
        </span>
      </h4>
    </div>
  </div>
</div>
