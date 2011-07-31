$('document').ready(function() {
  
  $('#grid-results').masonry({
      itemSelector : '.search-item',
    });
    
  $(".chzn-select").chosen();
  $('.chzn-select').change(function() {
    $("select option:selected").each(function () {
      console.log($(this));
      window.location.href=$(this).attr('data-link');
    });
  });
});