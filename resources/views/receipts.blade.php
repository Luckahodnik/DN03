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
		@component('components.navbar')

		@endcomponent


  </div>
  <div class="fixed-action-btn click-to-toggle">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
					<li class="file-field input-field">
									<a class="btn-floating blue">
											<i class="material-icons">attach_file</i>
											<input id="file_input" type="file" multiple>
									</a>
					</li>
					<li><a class="btn-floating yellow darken-1 modal-trigger" href="#modal1"><i class="material-icons">format_quote</i></a></li>
				</ul>
		</div>

		<div id="modal1" class="modal">
    <div class="modal-content">
      <div class="row">
								<form class="col s8">
										<div class="row">
												<div class="input-field col s6">
														<input type="text">
														<label>Ime trgovine</label>
												</div>
												<div class="input-field col s6">
														<input type="text">
														<label for="last_name">Znesek</label>
												</div>
										<div class="input-field col s12">
												<input type="text" class="datepicker">
												<label for="last_name">Datum izdatka</label>
										</div>
										<div class="input-field col s12">
												<select>
														<option value="" disabled selected>Vrsta izdatka</option>
														<option value="1">Hrana</option>
														<option value="2">Nujne potrbščine</option>
														<option value="3">Ostalo</option>
												</select>
												<label>Materialize Select</label>
										</div>
									</div>
								</form>
						</div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Dodaj</a>
    </div>
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
									<div class="col s12 align-center">
										<canvas id="myChart" width="1200" height="400"></canvas>
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
								<button class="waves-effect waves-light btn-large green">PDF</button>
							</td>
						</tr>
					</tbody>
			</table>
	</div>

</body>
</html>
