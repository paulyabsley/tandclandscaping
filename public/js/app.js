$(document).ready(function() {
	$('.pop-up').magnificPopup({
		type: 'image'
	});
	$('.portfolio').magnificPopup({
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image',
		gallery: {
			enabled:true
		}
	});
});