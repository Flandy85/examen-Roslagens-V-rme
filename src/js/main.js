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