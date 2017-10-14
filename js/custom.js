$(window).on('keyup', function(e){
  if (e.which === 84 /* T key */) {
    $('.b-notification-blink').addClass('heartbit');
  }
  else if (e.which === 27 /* Esc */ ) {
    hideNewsfeedPopup();
  }
});


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


$('.b-modal-open').on('click', showNewsfeedPopup);
$('.modal').on('click', function(e){
  if ($(e.target).is('.modal')) {
    hideNewsfeedPopup();
  }
});

function showNewsfeedPopup(){
  $('.b-modal').removeClass('hidden');
  $('body').addClass('modal-open');
}

function hideNewsfeedPopup(){
  $('.b-modal').addClass('hidden');
  $('body').removeClass('modal-open');
}

$('.b-modal-upvote').on('click', function(e){
  var counter = $(e.currentTarget).find('.btn').last();
  counter.text(+counter.text() + 1);
});
