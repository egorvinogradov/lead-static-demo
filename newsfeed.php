<?php include_once 'config.php' ?>
<?php include_file('includes/header') ?>
<?php include_file('includes/navbar', [title=> 'My Newsfeed']) ?>
<?php include_file('includes/sidebar', [tab => 'newsfeed']) ?>

<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-lg-3 col-md-3  col-sm-12 col-xs-12">
            <div class="white" style="padding: 0px;">
              <ul class="subsidebar">
                <a href="/newsfeed/1/" class="active">
                  <li>Marketing</li>
                </a>
                <a href="/newsfeed/10/">
                  <li>Public Relations</li>
                </a>
                <a href="/newsfeed/7/">
                  <li>Startups</li>
                </a>
              </ul>
            </div>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="row">


              <?php
              $items = get_json('newsfeed');
              $replies = get_json('newsfeed-comments');
              foreach ($items as $index=>$item) {
                $reply = $replies[$index]; ?>
              
                <div>
                  <div class="col-md-6 col-sm-12 b-news-9">
                    <div style="margin-bottom: 15px;">
                      <div class="text-center news-card" style="background-image: url(<?php echo $item->image_url ?>)"></div>
                      <div class="white" style="padding: 0px;">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="news-card-title">
                              <div class="dots2  news-card-title2">
                                <?php echo $item->title ?>
                              </div>
                            </div>
                            <div class="news-card-delimiter"></div>
                            <div class="col-md-12" style="padding-top: 15px;">
                              <div>
                                <div class="row">
                                  <div class="col-md-2">
                                    <div class="text-center b-news-10">
                                      <img class="img-responsive img-circle" alt="image" src="<?php echo $reply->user->picture_url ?>" style="width: 60px; height: 60px; margin: 0px auto;">
                                    </div>
                                  </div>
                                  <div class="col-md-9" style="padding-left: 0px;">
                                    <div>
                                      <p>
                                        <b class="b-news-11">
                                          <?php echo $reply->user->first_name ?>
                                          <?php echo $reply->user->last_name ?>
                                        </b>
                                        <span class="gray">
                                          <?php echo join(' at ', [$reply->user->job_title, $reply->user->company_name]) ?>
                                        </span>
                                      </p>
                                    </div>
                                  </div>
                                  <div class="col-md-12 b-news-12" style="padding-right: 15px; padding-left: 15px; padding-top: 10px;">
                                    <p style="font-weight: 400; height: 66px; overflow: hidden;">
                                      <?php echo $reply->text ?>
                                    </p>
                                  </div>
                                </div>
                                <div></div>
                              </div>
                            </div>
                            <div class="col-md-12" style="padding-left: 15px; padding-bottom: 15px;">
                              <div>
                                <div class="row">
                                  <div class="col-md-12 b-news-13">
                                    <?php echo output_opinion_images($reply->opinion_icons) ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12"></div>
                          </div>
                        </div>
                      </div>
                    </div>
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
