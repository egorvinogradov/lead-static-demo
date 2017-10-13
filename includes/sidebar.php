<?php include_once '../config.php' ?>

<div class="navbar-default sidebar" role="navigation">
  <div class="slimScrollDiv">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
      <ul class="nav" id="side-menu">
        <li class="l-nav__title nav-small-cap m-t-10" style="margin-left: 0px;margin-top: 14px !important;letter-spacing: 0.03em;font-weight: 500;font-size: 12px;">
          Navigation
        </li>
        <li>
          <a class="<?php echo $include_data['tab'] === 'newsfeed' ? 'active' : '' ?>" href="/newsfeed"><i class="fa fa-file-text-o icon-padding" style="font-size: 16px;"></i>
            My Newsfeed
          </a>
        </li>
        <li>
          <a class="<?php echo $include_data['tab'] === 'mentors' ? 'active' : '' ?>" href="/">
            <i class="fa fa-address-book-o icon-padding" style="font-size: 16px;"></i>
            Find a Mentor
          </a>
        </li>
        <li>
          <a class="<?php echo $include_data['tab'] === 'my-mentors' ? 'active' : '' ?>" href="/my-mentors">
            <i class="fa fa-user-o icon-padding" style="font-size: 16px;"></i>
            My Mentors
          </a>
        </li>
        <li>
          <a class="<?php echo $include_data['tab'] === 'my-mentees' ? 'active' : '' ?>" href="/my-mentees"><i class="fa fa-support icon-padding" style="font-size: 16px;"></i>
            My Mentees
            <b class="label label-success label-rounded pull-right">1</b>
          </a>
        </li>
        <li>
          <a class="<?php echo $include_data['tab'] === 'questions' ? 'active' : '' ?>" href="/questions">
            <i class="fa fa-question-circle-o icon-padding" style="font-size: 17px;"></i>
            My Questions
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
