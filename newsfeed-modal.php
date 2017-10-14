<?php
$items = get_json('newsfeed');
$replies = get_json('newsfeed-comments');
$item = $items[$include_data['newsfeed_id']];
?>

<div class="b-modal hidden" role="dialog">
  <div class="modal-backdrop fade in"></div>
  <div role="dialog" tabindex="-1" class="fade in modal" style="display: block; padding-left: 0px;">
    <div class="modal-lg modal-dialog">
      <div class="modal-content" role="document">
        <div class="img-modal-header" style="background: url('<?php echo $item->image_url ?>') center center / cover;"></div>
        <div class="modal-body">
          <div>
            <div class="white b-modal-6">
              <div class="row">
                <div class="col-md-12">
                  <div>
                    <div class="gray">
                      <i class="fa fa-link"></i>
                      forbes.com
                    </div>
                    <div class="news-details-title b-modal-7">
                      <?php echo $item->title ?>
                    </div>
                    <div>
                      <p class="b-modal-8">
                        <?php echo $item->summary ?>
                      </p>
                      <a name="writecomment" href="/"></a>
                      <div class="row">
                        <div class="col-md-12">
                          <a target="_blank" href="<?php echo $item->link ?>" class="b-modal-9 btn btn-primary btn-block btn-lg">
                            Read Full Article
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div>

                  <div class="col-md-12 b-modal-19">
                    <div class="form form-horizontal">
                      <div class="form-group">
                        <div class="col-md-12 b-modal-18">
                          <p class="m-b-0 m-t-20 b-modal-12">Write Your Opinion</p>
                          <textarea class="m-t-5 m-b-20 form-control" rows="4"></textarea>
                        </div>
                        <div class="col-md-12">
                          <div class="pull-right">
                            <button class="btn btn-info b-modal-10">Submit</button>
                          </div>
                        </div>
                      </div>
                    </div>


                    <?php foreach ($replies as $index=>$reply) { ?>

                      <div class="<?php echo $index ? '' : 'user-pick-bg' ?>">
                        <div class="lead-delimiter"></div>
                        <br>
                        <div>
                          <div class="row">

                            <div class="col-md-12 gray">
                              <?php if (!$index) { ?>
                                <p>
                                  <b>Readers` pick</b>
                                  <i class="m-l-5 fa fa-check-circle"></i>
                                </p>
                              <?php } ?>
                            </div>

                            <div class="col-md-12">

                              <div class="comment-card-img b-modal-14">
                                <img class="img-responsive img-circle" alt="image" src="<?php echo $reply->user->picture_url ?>" style="width: 60px; height: 60px; margin: 0px auto;">
                              </div>

                              <div class="comment-card-name">
                                <p class="b-modal-13">
                                  <a href="/users/45/profile">
                                    <b>
                                      <?php echo $reply->user->first_name ?>
                                      <?php echo $reply->user->last_name ?>
                                    </b>
                                    <span class="label label-rouded label-success profile-card-label">Mentor</span>
                                    <br>
                                    <span class="gray">
                                    <?php echo join(' at ', [$reply->user->job_title, $reply->user->company_name]) ?>
                                      <span class="m-l-5 m-r-5">•</span>
                                      <?php echo date("m/d/Y", strtotime($reply->timestamp)) ?>
                                  </span>
                                  </a>
                                </p>
                              </div>
                            </div>

                            <div class="col-md-12">
                              <p class="b-modal-15">
                                <?php echo $reply->text ?>
                              </p>
                              <div class="b-modal-17">
                                <div class="btn-group btn-space b-modal-upvote">
                                  <button class="btn btn-primary b-modal-16">Upvote</button>
                                  <button class="btn btn-primary b-modal-16" style="color: rgb(204, 204, 204);">
                                    <?php echo $reply->vote_score ?>
                                  </button>
                                </div>
                                <div class="btn-group btn-space">
                                  <button class="btn btn-default b-modal-16" style="color: rgb(166, 175, 187);">Downvote</button>
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
    </div>
  </div>
</div>