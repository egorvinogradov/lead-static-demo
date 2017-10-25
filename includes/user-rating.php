<?php
include_once '../config.php';
$item = $include_data['user'];
?>

<div class="m-l-10">
  <div class="row ">
    <div class="col-md-12 b-profile-10">
      <b>
        Your overall mentorship experience with <?php echo $item->first_name ?>
      </b>
    </div>
    <div class="col-md-4">
      <div class="row b-profile-11" style="margin-top: 5px;">
        <div class="col-md-12">
          <p style="margin-top: 10px;" class="b-profile-13">
            <?php echo $item->first_name ?> is:
          </p>
        </div>
        <div>
          <div class="col-md-5">Helpful</div>
          <div class="col-md-7">
            <div>
              <i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i>
            </div>
          </div>
        </div>
        <div>
          <div class="col-md-5">Accessible</div>
          <div class="col-md-7">
            <div>
              <i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star rating-star-disabled"></i>
            </div>
          </div>
        </div>
        <div>
          <div class="col-md-5">Friendly</div>
          <div class="col-md-7">
            <div>
              <i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 text-center rating-overall-box b-profile-14">
      <b class="b-profile-15 m-t-10" style="text-transform: uppercase; font-size: 14px;">Overall
        score</b>
      <h3 class="b-profile-16" style="font-size: 22px; font-weight: 400;">93%</h3>
      <p class="text-primary b-profile-17 m-0">Fantastic</p></div>
  </div>
</div>


<?php if ( $item->already_rated ) { ?>

  <div class="m-l-10 b-profile-41">
    <div class="rating-done-bg request-mentor">
      <b>Nothing to rate yet</b><br>
      You will be able to rate your weekly mentorship experience with <?php echo $item->first_name ?>
      after this week is finished
    </div>
  </div>

<?php } else { ?>

  <div class="b-profile-18 m-l-10 b-profile-rate">
    <div class="row rating-select-bg">
      <div class="col-md-12 b-profile-19">
        <b>Please rate your mentorship experience for the past week (Sep 25 — Oct 1)</b>
      </div>
      <div class="col-md-5">
        <div class="row b-profile-20 m-t-5">
          <div class="col-md-12">
            <p>Last week,
              <?php echo $item->first_name ?> was:
            </p>
          </div>
          <div>
            <div class="col-md-4">Helpful</div>
            <div class="col-md-8">
              <div class="b-profile-rate-row">
                <i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i>
              </div>
            </div>
          </div>
          <div>
            <div class="col-md-4">Accessible</div>
            <div class="col-md-8">
              <div class="b-profile-rate-row">
                <i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i>
              </div>
            </div>
          </div>
          <div>
            <div class="col-md-4">Friendly</div>
            <div class="col-md-8">
              <div class="b-profile-rate-row">
                <i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i><i class="fa fa-star rating-star-disabled"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <button class="b-profile-21 btn btn-info pull-right" style="margin-top: 60px;">Submit Your Rating</button>
      </div>
    </div>
</div>

<?php } ?>
