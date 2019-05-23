<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/common.js"></script>
	<script src="js/receipts.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script src="js/chart.js/dist/Chart.js"></script>
	<title>Mobilni e-Arhiv</title>
</head>
<body>
	<nav class="nav-wrapper green">
			<a href="#" data-target="slide-out" class="sidenav-trigger right large show-on-medium-and-down"><i class="material-icons">menu</i></a>

		<div id="menu" >
		<a href="{{ route('homeView') }}">
		<img class="logo" alt="" src="slike/logo.svg"/></a>
			<ul class="right hide-on-med-and-down">
				<li>
					<a id ="menu_h" href="{{ route('homeView') }}">
						Domov
					</a>
				</li>
				<li>
					<a id ="menu_r" href="{{ route('receiptsView') }}">
						E-računi
					</a>
				</li>
				<li>
  					<a class="btn-floating pulse black modal-trigger" href="#modal1">
							<i class="material-icons right large">account_circle</i>
					</a>
				</li>
				</ul>
		</div>
	</nav>

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
				<a id ="menu_h" href="{{ route('homeView') }}">
					Domov
				</a>
			</li>
			<li>
				<a id ="menu_r" href="{{ route('receiptsView') }}">
					E-računi
				</a>
		</ul>

  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
		<div class="container" id="login">
				<h5 class="black-text center-align">Vpiši se v svoj račun</h5>
				<div class="section"></div>

				<div class="container center-align">
					<div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

					<form class="col s12" method="post">
						<div class='row'>
						<div class='col s12'>
						</div>
						</div>

						<div class='row'>
						<div class='input-field col s12'>
							<input class='validate' type='email' name='email' id='email' />
							<label for='email'>Vnesi svoj email</label>
						</div>

						<div class='input-field col s12'>
							<input class='validate' type='password' name='password' id='password' />
							<label for='password'>Vnesi svoje geslo</label>
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

  </div>
  <div class="fixed-action-btn click-to-toggle">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>

	<div class="col s12 m8 offset-m2 l6 offset-l3">
		<div class="card-panel grey lighten-5 z-depth-1 hide-on-med-and-up">
			<div class="row valign-wrapper">
				<div class="col s2">
						<a id ="menu_c" href="resources.html" id="login" class="btn-floating black large"><i class="material-icons right large">account_circle</i></a>
				</div>
				<div class="col s10">
					<span class="black-text">
						Vpišite se v svoj uporabniški račun, da pridobite vpogled v svoje račune.
					</span>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
				<div class="move-up white">
						<div>
							<span class="chart-title black"><h5>Tvoji izdatki</h5></span>
							<div id="stikalo" class="switch chart-revenue-switch">
								<label class="black-text text-lighten-5">
									Tedenski
									<input type="checkbox" wtx-context="B0DD3F95-4C66-4236-8EAF-27A760CE2072">
									<span class="lever black"></span>
									Mesečni
								</label>
							</div>
							<div class="row">
									<div class="col s12 m12 l9 align-center">
										<canvas id="myChart" width="1200" height="400"></canvas>
									</div>
									<div class="col s5 m4 l3 hide-on-med-and-down">
										<canvas id="myChart1" width="400" height="400"></canvas>
									</div>
							</div>
						</div>
				</div>

				<table class="highlight centered">
					<thead>
						<tr>
							<th>Trgovina</th>
							<th>Znesek izdatka</th>
							<th>Račun</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Mercator</td>
							<td>12.78€</td>
							<td>
								<button class="">PDF</button>
							</td>
						</tr>
						<tr>
							<td>Mercator</td>
							<td>12.78€</td>
							<td>
								<button class="">PDF</button>
							</td>
						</tr>
						<tr>
								<td>Mercator</td>
								<td>12.78€</td>
								<td>
									<button class="">PDF</button>
								</td>
							</tr>
							<tr>
									<td>Mercator</td>
									<td>12.78€</td>
									<td>
										<button class="">PDF</button>
									</td>
								</tr>
					</tbody>
			</table>
	</div>



</body>
</html>
