 // $('.sl').slick;

document.body.onload = function() {
	setTimeout(function() {
		var preloader = document.getElementById('page-preloader');
		if ( !preloader.classList.contains('done') ) {
			preloader.classList.add('done');
		}
	}, 1000);
}

const input = document.getElementById('exampleFormControlFile2');
input.addEventListener('change', function (ev){
	const files = ev.target.files;

	const file = files[0];
});



