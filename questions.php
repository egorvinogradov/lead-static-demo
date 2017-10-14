<?php include_once 'config.php' ?>
<?php include_file('includes/header') ?>
<?php include_file('includes/navbar', [title=> 'My Questions']) ?>
<?php include_file('includes/sidebar', [tab => 'questions']) ?>

<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-lg-3 col-md-3  col-sm-12 col-xs-12">
            <div class="white" style="padding: 0px;">
              <ul class="subsidebar">
                <a class="active">
                  <li>Most Relevant Questions</li>
                </a>
                <a class="">
                  <li>New Questions</li>
                </a>
              </ul>
            </div>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div>
              <div class="panel">
                <div class="panel-body">
                  <div class="row">
                    <div class="">
                      <div class="form form-horizontal" id="question-container">
                        <div class="form-group">
                          <div class="col-md-12">
                            <div class="col-md-12">
                              <textarea id="question-textarea" placeholder="Ask Your Question..." class="form-control b-question-7"></textarea>
                            </div>
                          </div>
                        </div>

                        <div class="clearfix b-question-6">

                          <div class="col-md-4 p-l-0">
                            <select id="question-tags" name="states[]" multiple="multiple">
                              <?php echo render_qa_tags() ?>
                            </select>
                          </div>

                          <div class="b-question-5 m-r-5 pull-right">
                            <div>
                              <label>
                                <div class="checkbox checkbox-info">
                                  <input type="checkbox" id="radio2" value="on">
                                  <label for="radio2">
                                    Ask Anonymously
                                  </label>
                                </div>
                              </label>
                            </div>
                          </div>

                        </div>

                        <div class="col-md-12 b-question-4">
                          <div class="pull-right">
                            <button class="btn btn-info">Submit Your Question</button>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <?php
                $items = get_json('questions');
                $replies = get_json('questions-replies');
                foreach ($items as $index=>$item) {
                  $reply = $replies[$index];
                  ?>


                  <div class="panel b-question-9">
                    <div class="row">

                      <div class="col-md-12">
                        <div class="news-card-title">
                          <div class="dots2  news-card-title2 b-question-10">
                            <?php echo $item->title ?>
                          </div>
                        </div>
                        <div class="news-card-delimiter"></div>
                        <div class="col-md-12" style="padding-top: 15px;">
                          <div>
                            <div class="row">
                              <div class="col-md-2 b-news-10-0">
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
                                <?php echo output_opinion_images($reply->opinion_icons, 'more answers') ?>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12"></div>
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
