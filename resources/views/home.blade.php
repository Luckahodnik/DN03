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
		<div class="navbar-fixed">
			<nav class="nav-wrapper green ">
				<a href="#" data-target="slide-out" class="sidenav-trigger right large show-on-medium-and-down">
					<i class="material-icons">menu</i>
				</a>
				<div id="menu">
					<a href="{{ route('homeView') }}">
						<img class="logo" alt="" src="slike/logo.svg">
					</a>
					<ul class="right hide-on-med-and-down">
						<li>
							<a id ="menu_h" href="{{ route('homeView') }}">Domov</a>
						</li>
						<li>
							<a id ="menu_r" href="{{ route('receiptsView') }}">E-računi</a>
						</li>
						<li>
							<a class="btn-floating pulse black modal-trigger" href="#modal1">
									<i class="material-icons right large">account_circle</i>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		<ul id="slide-out" class="sidenav">
			<li>
				<div class="user-view">
					<div class="background green">
						<img src="slike/mainphoto.jpg"/>
						<img class="logo" alt="" src="slike/logo.svg"/>
					</div>
					<a id ="menu_c" href="resources.html" id="login" class="btn-floating black large">
						<i class="material-icons right large">account_circle</i>
					</a>
				</div>
			</li>
			<li>
				<a id ="menu_h" href="{{ route('homeView') }}">Domov</a>
			</li>
			<li>
				<a id ="menu_r" href="{{ route('receiptsView') }}">E-računi</a>
			</li>
		</ul>

		<div id="modal1" class="modal modal-fixed-footer" >
			<div class="modal-content">
				<div class="container" id="login">
					<h5 class="black-text center-align">Vpiši se v svoj račun</h5>
					<div class="section"></div>

					<div class="container center-align">
						<div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
						<form class="col s12" method="post">
							<div class='row'>
								<div class='input-field col s12'>
									<input class='validate' type='email' name='email' id='email' />
                                    <label for='email'>Vnesi svoj email</label>
                                    <span class="helper-text" data-error="Vnesi pravilen email brez šumnikov, ki vključuje @" data-success="Ustrezen email"></span>
								</div>

								<div class='input-field col s12'>
									<input class='validate' type='password' name='password' id='password' />
                                    <label for='password'>Vnesi svoje geslo</label>
                                    <span class="helper-text" data-error="Geslo mora imeti vsaj 8 znakov" data-success="Ustrezno geslo"></span>
								</div>
								<label style='float: right;'>
									<a class='red-text' href='#!'><b>Pozabljeno geslo</b></a>
								</label>
							</div>

							<br />
							<div class='row'>
								<button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect black'>Vpiši se</button>
							</div>
						</form>

						</div>
					</div>
					<div class='container center-align'>
							<a class='black-text' href='#!'><b>Ustvari račun</b></a>
					</div>
					</div>
				</div>
				<div class="modal-footer">
						<a class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
			</div>
		</div>

		<div class="parallax-container  hide-on-med-and-down">
				<div class="parallax">
					<img src="slike/nature.jpg"/>
				</div>
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
									<h5>2. Vpiši se</h5>
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
