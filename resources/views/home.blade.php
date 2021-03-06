<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<title>Mobilni e-Arhiv</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css') }}">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}" media="screen,projection"/>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
		<style>
			.invalid-feedback{
				display:block;
			}

		</style>
	</head>
	<body>
		@component('components.navbar')
		@endcomponent

		<div>
				<div class="parallax-container hide-on-small-only" >
						<div class="parallax">
							<img src="{{ asset('slike/mainphoto.jpg') }}">
						</div>
				</div>
		</div>

		<div id="karte" class="container">
			<div class="row center-align">
					<div class="col s12 m4 l4">
						<div class="card-panel white z-depth-3" id="karta">
								<a href="{{url('/register')}}">
									<img class="ikone" src="{{ asset('slike/register.svg') }}"/>
									<p id="ikone_naslov">1. Registriraj svoj uporabniški račun</p>
								</a>
						</div>
					</div>
					<div class="col s12 m4 l4" >
							<div class="card-panel white z-depth-3" id="karta">
									<a
									@if (Auth::check())
									onclick="M.toast({html: 'Ste že vpisani!'})"
									@else
									href="{{url('/login')}}"
									@endif>
										<img class="ikone" src="{{ asset('slike/login.svg') }}"/>
										<p id="ikone_naslov">2. Vpiši se v svoj uporabniški račun</p>
									</a>
							</div>
					</div>
					<div class="col s12 m4 l4 ">
							<div class="card-panel white z-depth-3" id="karta">
									<a href="{{ route('receiptsView') }}">
										<img class="ikone" src="{{ asset('slike/online.svg') }}"/>
										<p id="ikone_naslov">3. Dodaj svoje elektronske račune</p>
								</a>
							</div>
					</div>
			</div>
		</div>

				<div class="parallax-container hide-on-small-only"  id="parallax_slika">
						<div class="parallax">
							<img src="{{ asset('slike/nature.jpg') }}">
						</div>
						<div class="container center"><img class="naslov" src="{{ asset('slike/naslov.svg') }}"/></div>
			</div>
			<div>



<div class="container" id="karte">
		<div class="row">
	<div class="card col s4  karta_slika">
		<div class="card-image waves-effect waves-block waves-light">
				<img class="activator" src="slike/karta.jpg">
		</div>
		<div class="card-content">
				<span class="card-title activator grey-text text-darken-4">Cilj aplikacije<i class="material-icons right">more_vert</i></span>
				<p><a href="http://www.roseslovenia.eu/o-ukrepu.html">Rose ukrep</a></p>
		</div>
		<div class="card-reveal">
				<span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
				<div class="col s12 m12">
								<p id="vsebina_domov">Papirnati računi v trgovinah se pogosto zavržejo, izgubijo ali pa skozi čas zbledijo.
									<br>S to aplikacijo bomo omogočili strankam dolgotrajno hranjenje elektronskih računov in nadzor nad njimi.
									Stranka si lahko na spletni strani doda svoje elektronske račune, jih nadzoruje in ima pregled nad svojimi izdatki z grafično upodobitvijo.
								</p>
				</div>
		</div>
	</div>
</div>
</div>
</div>

	</body>
</html>
