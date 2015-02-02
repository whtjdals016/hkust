var main = function() {
	$('.login-button').toggle(function() {
		$('.login-panel').animate({
			top: '101px'}, 200);
		},
		function() {
		$('.login-panel').animate({
			top: '-250px'}, 200);
		});
};
   

$(document).ready(main);