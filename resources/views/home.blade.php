<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<title>Mobilni e-Arhiv</title>
		<link rel="stylesheet" type="text/css" href="css/mystyle.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="js/common.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</head>
	<body>
		@component('components.navbar')

		@endcomponent

		<div class="parallax-container hide-on-med-and-down">
				<div class="parallax"><img src="slike/nature.jpg"></div>
		</div>
		<div class="container">
			<div class="row center-align">
					<div class="col s12 m4 l4">
						<div class="card-panel white z-depth-2 karta">
								<img class="ikone" src="slike/register.png"/>
								<h5>1. Registriraj svoj uporabniški račun</h5>
						</div>
					</div>
					<div class="col s12 m4 l4">
							<div class="card-panel white z-depth-3 karta">
									<img class="ikone" src="slike/login.png"/>
									<h5>2. Vpiši se v svoj uporabniški račun</h5>
							</div>
					</div>
					<div class="col s12 m4 l4 ">
							<div class="card-panel white z-depth-2 karta">
									<img class="ikone" src="slike/online.png"/>
									<h5>3. Dodaj svoje elektronske račune</h5>
							</div>
					</div>
			</div>
		</div>



	</body>
</html>
