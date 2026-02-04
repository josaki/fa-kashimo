(function($){
  $body = $('body');
  var ref = document.referrer;
  var hereHost = window.location.hostname;

  var sStr = "^https?://" + hereHost;
  var rExp = new RegExp( sStr, "i" );

  if ( ref.match( rExp ) ) {
    $body.addClass('min');
    $('.header .inner').addClass('min');
    $('.loading--cont').hide();
    $set_time = 1000;
  } else {
    $set_time = 3000;
  }
  setTimeout(function(){
    $body.addClass('mov_in');
    $body.addClass('loaded');
  }, $set_time );

})(jQuery);