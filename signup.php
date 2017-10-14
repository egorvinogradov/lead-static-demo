<?php include_once 'config.php' ?>
<?php include_file('includes/header', [signup_page => true]) ?>

<div class="main-signin-page">
  <div class="col-md-offset-8 col-md-4 main-controls text-center">
    <div class="b-signup-7">
      <h3 class="b-signup-9">
        Connect your social media. <br>
        Let artificial intelligence <span class="text-nowrap">find the</span> right match.
      </h3>

      <hr class="m-b-30 m-t-30">
      <p class="text-center gray m-b-30 b-signup-8">
        We use machine learning to detect <span class="text-nowrap">users' personality</span> traits
        based on their background so that we can find mentors and mentees that are a perfect fit.
      </p>
      <form class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <a href="/newsfeed" class="b-signup-10 btn btn-info btn-block btn-lg">
              <i class="fa fa-linkedin-square text-white"></i>
              Connect LinkedIn
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include_file('includes/footer', [signup_page => true]) ?>
