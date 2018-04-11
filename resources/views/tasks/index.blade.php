<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">
<link href="https://fonts.googleapis.com/css?family=Pinyon+Script|Julius+Sans+One" rel="stylesheet">
<script src="js/hammer.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
crossorigin="anonymous">
<link rel="stylesheet" href="../css/mainCopy.css">
<!-- insert metas -->
<title>WEBDEV Feder</title>
</head>

<body>

<?php include('nav.inc'); ?>
<div class="main-container container-fluid no-gutters">
<div class="row topZone">
			<div id="leftis" class="long col-sm-12 col-lg-4 leftis">
			<div class="texter2" id="leftText">
					<h1> SHOW INDEX LEFT </h1><br><br><br><br><br><br>
					<ul>
					@foreach ($tasks as $task)
					<li>
						
						<a href="/tasks/{{ $task->id}}">
						{{$task->body}}</li>
						</a>
					@endforeach
					</ul>
			</div>
			</div>



			<div id="centralis" class="long col-sm-12 col-lg-4 centralis">
				<div class="texter" id="centralText">
						<div class="long2">
							<h1> SHOW INDEX </h1>
						</div>
				</div>
		</div>

		<div id="rightis" class="long col-sm-12 col-lg-4 rightis">
		<div class="texter2" id="rightText">
				<h1> SHOW INDEX RIGHT</h1>
		</div>
		</div>

	</div>
</div>
<script src="js/jq.js"></script>
<script>
$(function () {'use strict';
$("#fwd").click(function () {$('#leftis').fadeOut(200);$('#centralis').fadeIn(300);});
$("#ffwd").click(function () {$('#centralis').fadeOut(200);$('#rightis').fadeIn(300);});
$("#bck").click(function () {$('#leftis').fadeIn(300);$('#centralis').fadeOut(200);});
$("#bbck").click(function () {$('#centralis').fadeIn(300);$('#rightis').fadeOut(200);});
});
</script>
</body>
</html>