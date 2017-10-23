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
                              <?php echo render_questions_topics() ?>
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
                            <button class="btn btn-info b-question-submit">Submit Your Question</button>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>




              <div class="panel b-question-9 b-question-self">
                <div class="row">

                  <div class="col-md-12">
                    <div class="news-card-title">
                      <p class="gray b-question-30">
                        Your Question <span class="m-r-5 m-l-5">•</span> Submitted seconds ago
                      </p>
                      <div class="news-card-title2 b-question-10 b-question-text">
                        If you mean a job as someone who applies off-the-shelf tools (e.g., libraries from R, or scikit-learn, or Dato),
                        it might suffice to take two or three ML-related classes during your undergrad years, or one of the many online
                        MOOCs (eg such as https://www.coursera.org/learn.
                      </div>
                    </div>

                    <div class="news-card-delimiter"></div>
                    <div class="col-md-12" style="padding-top: 15px;">
                      <div>
                        <div class="row">
                          <div class="gray b-question-31">
                            No answers yet
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>



              <?php
                $items = get_json('questions');
                foreach ($items as $item) {
                  $reply_user = get_user_by_index($item->top_reply->user_id); ?>


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
                                  <img class="img-responsive img-circle" alt="image" src="<?php echo $reply_user->picture_url ?>" style="width: 60px; height: 60px; margin: 0px auto;">
                                </div>
                              </div>
                              <div class="col-md-9" style="padding-left: 0;">
                                <div>
                                  <p>
                                    <b class="b-news-11">
                                      <?php echo $reply_user->first_name ?>
                                      <?php echo $reply_user->last_name ?>
                                    </b>
                                    <span class="gray">
                                        <?php echo join(' at ', [$reply_user->job_title, $reply_user->company_name]) ?>
                                      </span>
                                  </p>
                                </div>
                              </div>
                              <div class="col-md-12 b-news-12" style="padding-right: 15px; padding-left: 15px; padding-top: 10px;">
                                <p style="font-weight: 400; height: 66px; overflow: hidden;" class="b-question-text">
                                  <?php echo $item->top_reply->text ?>
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
                                <?php echo output_reply_images($item->top_reply->reply_icons, 'more answers') ?>
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
