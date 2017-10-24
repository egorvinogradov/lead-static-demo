<?php
include_once '../config.php';
$item = $include_data['user'];
?>

<div class="chat-main-box p-t-10">
  <div class="chat-right-aside">
    <div class="chat-box">
      <ul class="chat-list p-0">
        <li class="odd">
          <div class="chat-image">
            <img src="<?php echo $item->picture_url ?>">
          </div>
          <div class="chat-body">
            <div class="chat-text">
              <h4>You</h4>
              <p>
              <p>
                Hi, <?php echo $item->first_name ?>!<br>
                My name is Kate and I'm a Junior Marketing Assistant at the Mobile Department at Lyft.
                <br><br>
                After a few back and forths in my career, I've come to the understanding that I need a good career advice. So, I've been looking for people with a great experience such as yours.
                Lead suggested that you might help with it. Would it be possible to request your mentorship on this? I would appreciate your help.
                <br><br>
                Thank you!
              </p>
              </p>
              <b class="b-message-datetime">10:03 AM</b></div>
          </div>
        </li>

        <li>
          <div class="chat-image">
            <img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAtXAAAAJDdkMmZmMjk4LTZlMDItNGYwZi1iMzM4LTA5Mjk1ZDJiMjAxZA.jpg">
          </div>
          <div class="chat-body">
            <div class="chat-text">
              <h4><?php echo $item->first_name ?></h4>
              <p class="text-muted">
                <i class="fa fa-bookmark-o- fa-envelope-o m-r-5"></i>
                Approved your mentorship request
              </p>
              <b class="b-message-datetime text-muted">10:05 AM</b></div>
          </div>
        </li>

        <li>
          <div class="chat-image">
            <img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAtXAAAAJDdkMmZmMjk4LTZlMDItNGYwZi1iMzM4LTA5Mjk1ZDJiMjAxZA.jpg">
          </div>
          <div class="chat-body">
            <div class="chat-text">
              <h4><?php echo $item->first_name ?></h4>
              <p>
                Hi Kate, <br>
                I'll be happy to help you!
              </p>
              <b class="b-message-datetime">10:05 AM</b></div>
          </div>
        </li>
      </ul>

      <div class="row send-chat-box">
        <div class="col-sm-12">
          <textarea class="form-control" placeholder="Type your message"></textarea>
          <div class="custom-send">
            <button class="btn btn-info btn-rounded" type="button">Submit Message</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>