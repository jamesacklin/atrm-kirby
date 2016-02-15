$(document).ready(function(){
  $('.transcript-content').hide();
  $('.transcript-button').click(function(){
    $(this).closest('article').find('.transcript-content').show();
  });
});
