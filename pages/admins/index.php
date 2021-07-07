<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>file</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script>
		$(document).ready(
			function(){
				var form = $('#myform');
				var message = $('#myform_status');

				form.on('submit', function(){
					var formData = new FormData();
					if(($('#myfile')[0].files).length !=0){
						$.each($('#myfile')[0].files, function(i, file){
							formData.append("file[" + i + "]", file);
						});
					}
					else {
						message.html('Нужно выбрать файл');
						return false;
					}
					$.ajax({
						type:"POST",
						url:"test.php",
						data:formData,
						cache:false,
						dataType:"json",
						contentType:false,
						processData:false,
						beforeSend:function(){
							console.log('Запрос начат');
							message.text('Запрос начат');
							form.find('input').prop("disabled", true);
						},
						success:function(data){
							if(data.status == 'ok'){
								message.text('Файлы загружены');
								$('#myfile').val('');
							}
							else{
								message.text('Что-то пошло не так!');
							}
						},
						complete:function(){
							console.log('Запрос окончен');
							form.find('input').prop("disabled", false);
						}
					});
					return false;
				});
			}
			);
		</script>
</head>
<body>

	<div class="container">
		<form id="myform" method="POST" enctype="multipart/form-data">
			<input type="file" name="myfile" id="myfile" multiple="multiple">
			<input type="submit">
			<div id="myform_status"></div>
		</form>
	</div>
	<style>
		body {
			background: #777;
			font-size: 1em;
		}
		.container {
			overflow: hidden;
			width: 50%;
			height: 100%;
			margin: 0 auto;
			background: #fff;
		}
		form{
			border: 1px solid #777;
			padding: 2em;
			margin: 2em;
		}
		#myform_status {
			margin-top: 1em;
			font-size: 0.85em;
		}
	</style>

</body>
</html>