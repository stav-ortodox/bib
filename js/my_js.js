 // $('.sl').slick;

document.body.onload = function() {
	setTimeout(function() {
		var preloader = document.getElementById('page-preloader');
		if ( !preloader.classList.contains('done') ) {
			preloader.classList.add('done');
		}
	}, 1000);
}

document.body.onload = function() {
	setTimeout(function() {
		var preloader1 = document.getElementById('form-preloader');
		if ( !preloader1.classList.contains('done') ) {
			preloader1.classList.add('done');
		}
	}, 1000);
}



