var anchorFooter = function () {

  var setStaticFooter = function () {
    $('#footer').css("position", "static")
  };

  var setFixedFooter = function () {
    $('#footer').css({"position" : "fixed" , "bottom" : "0"})
  };

  var compareHeights = function () {
    var contentHeight = $('.signUpHeader').outerHeight() + $(".signUp").outerHeight() + $(".loginWrapper").outerHeight() + $('#footer').outerHeight();
    var windowHeight  = $(window).height();
    
    console.log(contentHeight);

    if ( contentHeight < windowHeight ) {
      setFixedFooter();
    } else {
      setStaticFooter();
    };
  };

  compareHeights();

  $(window).resize(function() {
    compareHeights();
  });
};

$('document').ready(function() {
  
  $('#grid-results').masonry({
      itemSelector : '.result',
    });
    
  anchorFooter();
});