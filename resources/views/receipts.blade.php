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
											<input type="file" multiple>
									</a>
					</li>
					<li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
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
