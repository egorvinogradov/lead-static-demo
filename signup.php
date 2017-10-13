<?php include_once 'config.php' ?>
<?php include_file('includes/header', [signup_page => true]) ?>

<div class="main-signin-page">
  <div class="col-md-offset-8 col-md-4 main-controls">
    <div><br>
      <h3 class="text-center" style="font-size: 23px; font-weight: 500; text-transform: uppercase;">
        <!-- react-text: 80 -->Connect your social media<!-- /react-text --><br>
        <small>let artificial intelligence find the right match</small>
      </h3>
      <hr>
      <p class="text-center" style="font-weight: normal;">We use machine learning to detect users' personality traits
        based on their background so that we can find mentors and mentees that are a perfect fit.</p>
      <hr>
      <form class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <a href="/newsfeed" class="btn btn-info btn-block btn-lg">Connect Linkedin</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include_file('includes/footer', [signup_page => true]) ?>
