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
<div>
		<div class="parallax-container hide-on-small">
				<div class="parallax"><img src="slike/nature.jpg"></div>
				<div class="container center"><img class="naslov" src="slike/naslov.svg"/></div>

		</div>
</div>

		<div id="karte" class="container">
			<div class="row center-align">
					<div class="col s12 m4 l4">
						<div class="card-panel white z-depth-2 karta">

								<a href="{{url('/register')}}">
									<img class="ikone" src="slike/register.svg"/>
									<h5>1. Registriraj svoj uporabniški račun</h5>
								</a>
						</div>
					</div>
					<div class="col s12 m4 l4">
							<div class="card-panel white z-depth-2 karta">
									<a href="{{url('/login')}}">
										<img class="ikone" src="slike/login.svg"/>
										<h5>2. Vpiši se v svoj uporabniški račun</h5>
									</a>
							</div>
					</div>
					<div class="col s12 m4 l4 ">
							<div class="card-panel white z-depth-2 karta">
									<a href="{{ route('receiptsView') }}">
										<img class="ikone" src="slike/online.svg"/>
										<h5>3. Dodaj svoje elektronske račune</h5>
								</a>
							</div>
					</div>
			</div>
		</div>

				<div class="parallax-container hide-on-small">
						<div class="parallax"><img src="slike/mainphoto.jpg"></div>
			</div>
			<div id="karte" class="container">
			<div class="row">
					<div class="col s12 m4">
							<div class="card">
									<div class="card-image">
											<img src="slike/rose.jpg">
											<span class="card-title black-text">Cilj aplikacije</span>
									</div>
									<div class="card-content">
											<h5>Cilj naše aplikacije je ekološka alternativa prejemanja papirnatih računov.</h5>
									<div class="card-action">
											<a href="http://www.roseslovenia.eu/o-ukrepu.html">Ukrep Rose</a>
									</div>
							</div>
					</div>
			</div>
			<div class="col s12 m8">
					<div class="card-panel green">
							<h5 class="white-text">Papirnati računi v trgovinah se pogosto zavržejo, izgubijo ali pa skozi čas izgubijo.
								<br>S to aplikacijo bomo omogočili strankam dolgotrajno hranjenje elektronskih računov in nadzor nad njimi.
								Stranka si lahko na spletni strani doda svoje elektronske račune, jih nadzoruje in ima pregled nad svojimi izdatki z grafično upodobitvijo.
							</h5>
					</div>
			</div>
		</div>

	</body>
</html>
