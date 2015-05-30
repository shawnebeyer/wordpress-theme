$(function(){
	//your jQuery here
	
$(function(){
    $('.slideshow img:gt(0)').hide();

    setInterval(function(){
      $('.slideshow :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.slideshow');}, 
      3000);
});

});


//navbar

( function( $ ) {
$( document ).ready(function() {
$(document).ready(function(){

$('.navTop > ul > li ul').each(function(index, e){
  // var count = $(e).find('li').length;
  // var content = '<span class=\"cnt\">' + count + '</span>';
  // $(e).closest('li').children('a').append(content);
});
$('.navTop ul ul li:odd').addClass('odd');
$('.navTop ul ul li:even').addClass('even');
$('.navTop > ul > li > a').click(function() {
  $('.navTop li').removeClass('active');
  $(this).closest('li').addClass('active');	
  var checkElement = $(this).next();
  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
    $(this).closest('li').removeClass('active');
    checkElement.slideUp('normal');
  }
  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
    $('.navTop ul ul:visible').slideUp('normal');
    checkElement.slideDown('normal');
  }
  if($(this).closest('li').find('ul').children().length == 0) {
    return true;
  } else {
    return false;	
  }		
});

});

});
} )( jQuery );