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
                <a href="#" class="active">
                  <li>Most Relevant Questions</li>
                </a>
                <a href="#" class="">
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
                      <div class="form form-horizontal">
                        <div class="form-group">
                          <div class="col-md-12"><label class="col-md-12" style="font-size: 16px;">Ask question</label>
                            <div class="col-md-12">
                              <textarea draggable="false" placeholder="..." class="form-control" rows="6"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
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
                        <div class="col-md-6">
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


                  <div class="panel">
                    <div class="panel-heading">
                      <div class="row">
                        <div class="col-sm-12">
                          <h4>
                            <a class="dots2 titlehack" href="/questions/<?php echo $item->id ?>">
                              <?php echo $item->title ?>
                            </a>
                          </h4>
                        </div>
                      </div>
                    </div>
                    <div class="panel-body">
                      <div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="qa_block1">
                              <img class="img-responsive img-circle" alt="image" src="<?php echo $reply->user->picture_url ?>" style="width: 60px; height: 60px; margin: 0px auto;">
                            </div>
                            <div class="qa_block2">
                              <p>
                                <b>
                                  <?php echo $reply->user->first_name ?>
                                  <?php echo $reply->user->last_name ?>
                                </b>
                                <span>&nbsp;
                                  <span class="label label-rouded label-success profile-card-label">Mentor</span>
                                </span>
                                <br>
                                <span class="gray">
                                  <?php echo join(' at ', [$reply->user->job_title, $reply->user->company_name]) ?>
                                </span>
                              </p>
                            </div>
                          </div>
                          <div class="col-md-12" style="padding-top: 10px;">
                            <p class="dots3" style="font-weight: 400; height: 62px; overflow: hidden; margin: 0px; width: 703px;">
                              <?php echo $reply->text ?>
                            </p>
                          </div>
                        </div>
                        <div></div>
                      </div>
                      <br>
                      <div>
                        <div class="row">
                          <div class="col-md-12">
                            <?php echo output_opinion_images($reply->opinion_icons) ?>
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
