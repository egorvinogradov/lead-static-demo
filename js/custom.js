$(window).on('keyup', function(e){
  if (e.which === 84 /* T key */) {
    enableNotification();
  }
  else if (e.which === 27 /* Esc */ ) {
    hidePopups();
  }
});



/** NOTIFICATIONS **/

function enableNotification(){
  $('.b-notification-blink').addClass('heartbit');
}

function disableNotification(){
  $('.b-notification-blink').removeClass('heartbit');
}

$('.b-notification-dropdown').on('click', function(){
  disableNotification();
});



/** MODALS **/

$('.b-modal-open').on('click', function(e){
  showPopup('newsfeed');
});

$('.modal').on('click', function(e){
  if ($(e.target).is('.modal')) {
    hidePopups();
  }
});

$('.b-request-mentorship-button').on('click', function(){
  showPopup('request');
});

$('.b-modal-close').on('click', hidePopups);

function showPopup(id){
  $('.b-modal[name=' + id + ']').removeClass('hidden');
  $('body').addClass('modal-open');
}

function hidePopups(){
  $('.b-modal').addClass('hidden');
  $('body').removeClass('modal-open');
}

$('.b-modal-upvote').on('click', function(e){
  var counter = $(e.currentTarget).find('.btn').last();
  counter.text(+counter.text() + 1);
});

$('.b-request-submit').on('click', function(e){
  var button = $(e.currentTarget);
  var caption = button.text();
  button.text('Sending request...');

  setTimeout(function(){
    button.text('Request sent!');
    setTimeout(function(){
      hidePopups();
      button.text(caption);

      // Enable notification in the navbar
      setTimeout(function(){
        enableNotification();
      }, 3000);

    }, 800);
  }, 1700);

});



/** QUESTIONS **/

var questionTextArea = $('#question-textarea');
var questionContainer = $('#question-container');
var questionAddTags = $('#question-tags');

questionAddTags
  .select2({
    placeholder: 'Add tags'
  })
  .on('select2:opening', function(e){
    var value = $('.select2-search__field').val().trim();
    if (!value) {
      e.preventDefault();
    }
  });

questionTextArea.on('focus', function(){
  questionContainer.addClass('active');
});

$('.b-question-submit').on('click', function(e){
  var button = $(e.currentTarget);
  var caption = button.text();
  button.text('Submitting...');

  setTimeout(function(){
    button.text(caption);
    var question = $('.b-question-self');
    question.show();
    setTimeout(function(){
      question
        .addClass('b-question-self--expanded')
        .find('.b-question-text')
        .text( $('#question-textarea').val() );

      questionContainer.removeClass('active');
      questionTextArea.val('');
    }, 100);
  }, 1000);
});
