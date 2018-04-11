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
<link rel="stylesheet" href="css/mainCopy.css">
<!-- insert metas -->
<title>WEBDEV Feder</title>
</head>

<body>

<nav class="navbar fixed-top navbar-expand-md navbar-">
<a class="navbar-brand" href="index.php">
<img class="navBarLogo" src="img/federLogo.png" alt="Logo"> </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="index.php">Home
<span class="sr-only">(current)</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="webdev.php">WebDev</a>
</li>
<li class="nav-item">
<a class="nav-link" href="ux-ui.php">UX/UI</a>
</li>
<li class="nav-item">
<a class="nav-link" href="devilize.php">Devilize</a>
</li>
<li class="nav-item">
<a class="nav-link" href="audio.php">Audio</a>
</li>
<li class="nav-item">
<a class="nav-link" href="contact.php">Contacto</a>
</li>
</ul>
</div>
</nav>
{{--  <div class="overhead"><img class="overheadFooter"
src="img/feather2.png"></div>  --}}

<div class="main-container container-fluid no-gutters">

<div class="row topZone">






			<div id="leftis" class="long col-sm-12 col-lg-4 leftis">
			<div class="texter2" id="leftText">
                    <h1> AUDIO LEFT </h1>

			</div>
			</div>




			<div id="centralis" class="long col-sm-12 col-lg-4 centralis">
					<div class="texter" id="centralText">
							<div class="long2">
                                <h1> AUDIO </h1>
							</div>
					</div>
			</div>



			<div id="rightis" class="long col-sm-12 col-lg-4 rightis">
			<div class="texter2" id="rightText">
                    <h1> AUDIO RIGHT</h1>
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