/*************************************************************************
	Javascript for making header dissapear when scrolling down
	and return when changing scroll direction
*************************************************************************/
console.log('Testing header.js');
// Variables for Hiding Header when scrolling down
var scrolling;
var scrollToTop = 0;
var scrollLength = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event){
    scrolling = true;
});

setInterval(function() {
    if (scrolling) {
        hasScrolled();
        scrolling = false;
    }
}, 250);

// Function that checks if users are scrolling down
function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than 5
    if(Math.abs(scrollToTop - st) <= scrollLength)
        return;
    
    // If users has scrolled down and are past the navigationbar, adding class .nav-up.
    // This is so users wont see what is behind the navigationbar.
    if (st > scrollToTop && st > navbarHeight){
        // Scrolling Down
        console.log('Scrolling down');
        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scrolling Up
        console.log('Scrolling up');
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    scrollToTop = st;
}