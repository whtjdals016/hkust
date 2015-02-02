var main = function() {
	$('.marketbar').animate({
		top: '25px'}, 200);
	$('.content').animate({
		top: '25px'}, 200);
	$('footer').animate({
		top: '25px'}, 200);
	
    $('.marketbar').hover(function() {
   	$('.marketbar').animate( {
   		top: '100px'}, 200);
   }, function(){
   	$('.marketbar').animate({
   		top: '25px'}, 200);
   });
   
};
   

$(document).ready(main);