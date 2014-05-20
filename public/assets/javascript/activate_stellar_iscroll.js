(function(){
  var ua = navigator.userAgent,
    isMobileWebkit = /WebKit/.test(ua) && /Mobile/.test(ua);

  if (isMobileWebkit) {
    $('html').addClass('mobile');
  }

  $(function(){
    var iScrollInstance;

    if (isMobileWebkit) {
      iScrollInstance = new iScroll('wrapper');

      $('#scroller').stellar({
        scrollProperty: 'transform',
        positionProperty: 'transform',
        horizontalScrolling: false,
        verticalOffset: 150
      });
    } else {
		$.stellar({
		  // Set scrolling to be in either one or both directions
		  horizontalScrolling: false,
		  verticalScrolling: true,
		
		  // Set the global alignment offsets
		  horizontalOffset: 0,
		  verticalOffset: 1000,
		
		  // Refreshes parallax content on window load and resize
		  responsive: true
		});
    }
  });

})();