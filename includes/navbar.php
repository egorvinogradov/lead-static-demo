<?php include_once '../config.php' ?>

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
                <a href="/users/56/messages">
                  <div class="user-img">
                    <img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAwHAAAAJDFkNzczZTZhLTY4YjYtNDVlZi1iNGNmLTk1ZmM5M2EyMWNiMA.jpg" alt="user" class="img-circle">
                    <span class="profile-status online pull-right bg-danger"></span>
                  </div>
                  <div class="mail-contnet">
                    <h5 class="b-notification-2">Jenna Stone</h5>
                    <span class="b-notification-3 mail-desc">Approved your mentorship request</span>
                  </div>
                </a>
              </div>
            </li>

            <li>
              <div class="message-center">
                <a class="b-notification-5" href="#">
                  <div class="user-img">
                    <img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAwHAAAAJDFkNzczZTZhLTY4YjYtNDVlZi1iNGNmLTk1ZmM5M2EyMWNiMA.jpg" alt="user" class="img-circle">
                    <span class="profile-status online pull-right bg-danger"></span>
                  </div>
                  <div class="mail-contnet">
                    <h5 class="b-notification-2">Jenna Stone</h5>
                    <span class="b-notification-3 mail-desc">
                      Please rate your experience <span class="text-nowrap">with Jenna</span>
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
                  Jen Picard
                  <span>&nbsp;
                    <span class="label label-rouded label-success profile-card-label">Mentor</span>
                  </span>
                </span>&nbsp;
                <span class="caret"></span>
              </button>
              <ul role="menu" class="dropdown-menu" aria-labelledby="profile-card">

                <li><a href="/dashboard">Dashboard</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Settings</a></li>
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
