<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('js/common.js') }}"></script>
	<script src="{{ asset('js/receipts.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
	<script src="{{ asset('js/chart.js/dist/Chart.js') }}"></script>
	<title>Mobilni e-Arhiv</title>
</head>
<body>
		@component('components.navbar')
		@endcomponent

  <div class="fixed-action-btn click-to-toggle">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
					<li>
									<a class="btn-floating blue" id="modal_ikona">
											<label for="file_input"><i   class="material-icons">attach_file</i></label>
											<input style="display: none" id="file_input" accept="text/xml" type="file" multiple/>
									</a>
					</li>
					<li>
						<a class="btn-floating yellow darken-1 modal-trigger" href="#modal1">
							<i class="material-icons">format_quote</i>
						</a>
					</li>
				</ul>
		</div>

		<div id="modal1" class="modal">
				<div id="vrstica">
						<span id="vrstica_opis">Vnesi podatke o svojem izdatku</span>
				</div>
    <div class="modal-content">
      <div class="row">
								<form class="col s12">
										<div class="row">
												<div class="input-field col s7">
														<input id="ime_trg" type="text">
														<label>Ime trgovine</label>
												</div>
												<div class="input-field col s7">
														<input id="znesek" type="text">
														<label for="last_name">Znesek(€)</label>
												</div>
										<div class="input-field col s6">
												<input id="datum" type="text" class="datepicker">
												<label for="last_name">Datum izdatka</label>
										</div>
									</div>
								</form>
						</div>
				</div>
				<hr class="grey">
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat" id="dodaj">Dodaj</a>
    </div>
		</div>


<div class="container" id="podatki">
	<div class="row">
		<div id="vsi_izdatki" class="col s12 m6 l4">
			<div class="move-up white card-panel white z-depth-2" >
				<div id="opis_izdatki">
					<p class="green-text"><b>LETNI IZDATKI</p>
					<h5 id="sum_znesek">0</h5>
				</div>
				<div style="position: absolute; right: 10px; top: 10px">
					<i class="material-icons grey-text medium right">euro_symbol</i>
				</div>
			</div>
		</div>
		<div id="st_racunov" class="col s12 m6 l4">
			<div class="move-up white card-panel white z-depth-2" >
					<div id="opis_izdatki">
						<p class="green-text"><b>ŠTEVILO RAČUNOV</p>
						<h5 id="st_rac"><b>0</h5>
					</div>
					<div style="position: absolute; right: 10px; top: 10px">
						<i class="material-icons grey-text medium right">functions</i>
					</div>
			</div>
		</div>
		<div id="poraba" class="col s12 m6 l4">
			<div class="move-up white card-panel white z-depth-2" >
					<div id="opis_izdatki">
						<p class="green-text"><b>MAKS VREDNOST RAČUNA</p>
							<h5 id="maks_sum"><b>0</h5>
					</div>
					<div style="position: absolute; right: 10px; top: 10px">
							<i class="material-icons grey-text medium right">trending_up</i>
						</div>
			</div>
		</div>
	</div>
</div>

	<ul id="vrstica_dropdown" class="dropdown-content">
			<p id="opis_dd"><b>Vrsta pregleda</p>
			<li class="divider" tabindex="-1"></li>
			<li>
					<a class="btn black-text white disabled">Tedenski</a>
			</li>
			<li>
					<a class="btn black-text white disabled">Mesečni</a>
			</li>
			<li>
				<a class="black-text">Letni</a>
			</li>
			<li>
					<a class="black-text" id="delete">Izbriši podatke</a>
				</li>
	</ul>

	<div class="container">
				<div class="move-up white card-panel white z-depth-2" id="graf">
						<div id="vrstica">
								<a class="waves-effect waves-light right dropdown-trigger" data-target="vrstica_dropdown"><i class="material-icons black-text">more_vert</i></a>
								<span id="vrstica_opis">Izdatki</span>
						</div>
							<div class="row">
									<div class="col s12 align-center">
											<canvas id="myChart" width="1200" height="400"></canvas>
									</div>
						</div>
				</div>

				<table class="highlight responsive-table" id="tabela">
					<thead>
						<tr>
							<th><p class="th_tab">Izdajatelj računa</p></th>
							<th><p class="th_tab">Znesek izdatka (€)</p></th>
							<th><p class="th_tab">Datum</p></th>
						</tr>
					</thead>
					<tbody>
						<tr>

						</tr>
					</tbody>
			</table>
	</div>

</body>
</html>
