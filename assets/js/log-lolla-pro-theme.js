/**
 * Javascript functions for the Log Lolla Pro Theme
 */


// Click on an archive counter
var archiveCounterClick = function() {
	var archiveCounters = document.querySelectorAll('.archive-counter-list .archive-counter');

	function onMouseClick(index, event) {
		var target = '.' + archiveCounters[index].dataset.scrollto;
		console.log('target:' + target);
		console.log(jQuery(target));

		jQuery('html, body').animate(
			{
				scrollTop: jQuery(target).offset().top
        	},
			1000
		);
	}

	for (var i = 0; i < archiveCounters.length; i++) {
    	archiveCounters[i].addEventListener('click', onMouseClick.bind(null, i), false);
    }
}

// Run functions once the document is ready
document.addEventListener('DOMContentLoaded', function(){
	// Archive counter click
	if (document.querySelector('.archive-counter-list')) {
		archiveCounterClick();
	}
}, false);
