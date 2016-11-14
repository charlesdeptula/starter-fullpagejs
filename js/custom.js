$( document ).ready(function() {

	// initialize fullpage.js
	$('#wrapper').fullpage();

	// fade in all
	$('.fade-in-all').fadeOut(1000);

	// waypoints
	var viewport = $(window),
	setVisible = function (e) {
    var viewportTop = viewport.scrollTop() - 200,
    viewportBottom = viewport.scrollTop() + viewport.height() - 200;
    $('.waypoint').each(function () {
        var self = $(this),
            top = self.offset().top,
            bottom = top + self.height(),
            topOnScreen = top >= viewportTop && top <= viewportBottom,
            bottomOnScreen = bottom >= viewportTop && bottom <= viewportBottom,
            elemVisible = topOnScreen || bottomOnScreen;
        self.toggleClass('visible', elemVisible);
    });
	};
	viewport.scroll(setVisible);
	setVisible();


});