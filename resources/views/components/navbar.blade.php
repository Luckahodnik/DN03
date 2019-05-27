<ul id="dropdown1" class="dropdown-content">
  <li>
				<a class="green-text" href="{{ route('login') }}">{{ __('Vpiši se') }}</a>
		</li>
		<li>
				<a class="green-text" href="{{ route('register') }}">{{ __('Registriraj se') }}</a>
		</li>
  <li><a class="green-text" href="#!">Izpiši se</a></li>
</ul>


<nav class="nav-wrapper green">
		<a href="#" data-target="slide-out" class="sidenav-trigger right large show-on-medium-and-down"><i class="material-icons">menu</i></a>
	<div id="menu" >
	<a href="{{ route('homeView') }}">
	<img class="logo" alt="" src="slike/logo.svg"/></a>
		<ul class="right hide-on-med-and-down">
			<li>
				<a href="{{ route('homeView') }}">
					Domov
				</a>
			</li>
			<li>
				<a  href="{{ route('receiptsView') }}">
					E-računi
				</a>
			</li>
			<li>
						<a class="btn-floating pulse black dropdown-trigger" href="#!" data-target="dropdown1">
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
				<img src="slike/nature.jpg"/>
				<img class="logo" alt="" src="slike/logo.svg"/>
			</div>
		<a href="{{url('/login')}}" class="btn-floating black large">
				<i class="material-icons right large">account_circle</i>
			</a>
		</div>
	</li>
		<li>
			<a href="{{ route('homeView') }}">
				Domov
			</a>
		</li>
		<li>
			<a href="{{ route('receiptsView') }}">
				E-računi
			</a>
	</ul>
