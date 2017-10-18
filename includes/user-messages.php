<?php
include_once '../config.php';
$item = $include_data['user'];
?>

<div class="chat-main-box p-t-10">
  <div class="chat-right-aside">
    <div class="chat-box">
      <ul class="chat-list p-0">
        <li>
          <div class="chat-image">
            <img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAtXAAAAJDdkMmZmMjk4LTZlMDItNGYwZi1iMzM4LTA5Mjk1ZDJiMjAxZA.jpg">
          </div>
          <div class="chat-body">
            <div class="chat-text">
              <h4><?php echo $item->first_name ?></h4>
              <p> Hi, <?php echo $item->first_name ?> how are you and my son? </p>
              <b>10:00 AM</b></div>
          </div>
        </li>
        <li class="odd">
          <div class="chat-image">
            <img src="<?php echo $item->picture_url ?>">
          </div>
          <div class="chat-body">
            <div class="chat-text">
              <h4>You</h4>
              <p> Hi, How are you Ritesh!!! We both are fine sweetu. </p>
              <b>10:03 AM</b></div>
          </div>
        </li>
        <li>
          <div class="chat-image">
            <img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAtXAAAAJDdkMmZmMjk4LTZlMDItNGYwZi1iMzM4LTA5Mjk1ZDJiMjAxZA.jpg">
          </div>
          <div class="chat-body">
            <div class="chat-text">
              <h4><?php echo $item->first_name ?></h4>
              <p> Oh great!!! just enjoy you all day and keep rocking</p>
              <b>10:05 AM</b></div>
          </div>
        </li>
        <li class="odd">
          <div class="chat-image">
            <img src="<?php echo $item->picture_url ?>">
          </div>
          <div class="chat-body">
            <div class="chat-text">
              <h4>You</h4>
              <p>
                Your movei was superb and your acting is mindblowing
                Your movei was superb and your acting is mindblowing
                Your movei was superb and your acting is mindblowing
              </p>
              <b>10:07 AM</b></div>
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