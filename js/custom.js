$(window).on('keyup', function(e){
  if (e.which === 84 /* T key */) {
    enableNotification();
  }
  else if (e.which === 27 /* Esc */ ) {
    hidePopups();
  }
});


$('a[href=#]').on('click', function(e){
  e.preventDefault();
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
  history.replaceState({}, '', '/newsfeed/12/');
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
  if ( isNewsFeed() ) {
    history.replaceState({}, '', '/newsfeed/');
  }
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
      }, 500);

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
      question.addClass('b-question-self--expanded');
      var customText = $('#question-textarea').val();
      if (customText) {
        question
          .find('.b-question-text')
          .text(customText);
      }
      questionContainer.removeClass('active');
      questionTextArea.val('');
    }, 100);
  }, 1000);
});



/** MESSAGES **/

function formatTime(date){
  var hours = date.getHours();
  var minutes = date.getMinutes();
  var suffix = hours >= 12 ? 'PM' : 'AM';
  hours = hours % 12;
  hours = hours ? hours : 12; // the hour '0' should be '12'
  minutes = minutes < 10 ? '0' + minutes : minutes;
  return hours + ':' + minutes + ' ' + suffix;
}

function initializeMessagesTimestamps(selector){
  var startTimeStamp = +new Date() - 2 * 60 * 1000; // 2 min ago
  var step = 60 * 1000; // 1 min

  $(selector).each(function(i, e){
    var el = $(e);
    el.text( formatTime( new Date(startTimeStamp) ) );
    startTimeStamp += step;
  });
}

initializeMessagesTimestamps('.b-message-datetime');



/** REQUESTS **/

function hideMentorshipRequest(){
  var message = $('.b-profile-request-message');
  message.addClass('b-profile-request-message--collapsed');
  setTimeout(function(){
    message.addClass('hidden');
    $('.b-profile-request-counter').addClass('hidden');
    $('.b-profile-request-label').removeClass('hidden');
    $('.b-profile-request-feed-entry').removeClass('hidden');
  }, 300);
}

$('.b-profile-request-accept').on('click', function(e){
  var button = $(e.currentTarget);
  button.text('Loading...');
  setTimeout(function(){
    button.text('Done!');
    setTimeout(function(){
      hideMentorshipRequest();
    }, 300);
  }, 500);
});

$('.b-profile-request-reject').on('click', function(e){
  setTimeout(hideMentorshipRequest, 300);
});



/** NEWSFEED **/

function isNewsFeed(){
  return location.pathname.indexOf('/newsfeed') > -1;
}

function isNewsFeedItem(){
  return location.pathname.replace(/^\/newsfeed\/?/, '');
}

if ( isNewsFeedItem() ) {
  showPopup('newsfeed');
}
