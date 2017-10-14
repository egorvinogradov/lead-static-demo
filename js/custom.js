$(document).on('keypress', function(e){
  if (e.which === 116) {
    $('.b-notification-blink').addClass('heartbit');
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
