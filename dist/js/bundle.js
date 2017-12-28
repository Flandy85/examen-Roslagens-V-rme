/*************************************************************************
	Javascript for making header dissapear when scrolling down
	and return when changing scroll direction
*************************************************************************/
console.log('Testing header.js');
// Variables for Hiding Header when scrolling down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

// Function that checks if users are scrolling down
function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If users has scrolled down and are past the navigationbar, adding class .nav-up.
    // This is so users wont see what is behind the navigationbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scrolling Down
        console.log('When scrolling down');
        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scrolling Up
        console.log('When scrolling up');
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}
$(document).ready(function(){

  $('a').hover(
    function(){
        $(this).addClass('active');
        console.log('hover');
    },
    function(){
        $(this).removeClass('active');
    }
  );

});
console.log("Test test bundling js");

