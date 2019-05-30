
<script type="text/javascript" src="{{ asset('js/common.js') }}"></script>
<ul id="vrstica_dd" class="dropdown-content">
  <li>
				<a class="green-text"
				@if (Auth::check())
				onclick="M.toast({html: 'Ste že vpisani!'})"
				@else
				href="{{ route('login') }}"
				@endif>{{ __('Vpiši se') }}</a>
		</li>
		<li>
				<a class="green-text"
				@if (Auth::check())
				onclick="M.toast({html: 'Ste že vpisani!'})"
				@else
				href="{{ route('register') }}"
				@endif>{{ __('Registriraj se') }}</a>
		</li>
		@if (Auth::check())
  <li>
				<label class="green-text" for="logout-field">{{ __('Izpiši se') }}</label>
			<form class="hide" action="{{ route('logout') }}" method="post">
					{{ csrf_field() }}
				<input id="logout-field" class="green-text" type="submit"/>
			</form>
		</li>
		@endif
</ul>


<nav class="nav-wrapper green" id="glavna_vrstica">
		<a href="#" data-target="slide-out" class="sidenav-trigger right large show-on-medium-and-down"><i class="material-icons">menu</i></a>
	<div id="menu" >
	<a href="{{ route('homeView') }}">
	<img class="logo" alt="" src="{{ asset('slike/logo.svg') }}"/></a>
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
						<a class="btn-floating pulse black dropdown-trigger" href="#!" data-target="vrstica_dd">
							<i class="material-icons right large white-text">person</i>
						</a>
			</li>
			</ul>
	</div>
</nav>

<ul id="slide-out" class="sidenav">
	<li>
		<div class="user-view">
			<div class="background green">
				<img src="{{ asset('slike/nature.jpg') }}"/>
				<img class="logo" alt="" src="{{ asset('slike/logo.svg') }}"/>
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
