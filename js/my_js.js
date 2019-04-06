 // $('.sl').slick;

document.body.onload = function() {
	setTimeout(function() {
		var preloader = document.getElementById('page-preloader');
		if ( !preloader.classList.contains('done') ) {
			preloader.classList.add('done');
		}
	}, 1000);
}

// const input = document.getElementById('exampleFormControlFile2');
// input.addEventListener('change', function (ev){

// 	const files = ev.target.files;

// 	const file = files[0];

// 	const formData = new FormData();

// 	formData.append('slide_image', file);

	// const request = new XMLHttpRequest();

	// request.addEventListener('load', function (){

	// 	console.log(request.responseText);

	// });

	// request.open('POST', '/pages/admins/test.php');
	// request.send(formData);

// });



