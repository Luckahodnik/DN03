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
						<a class="btn-floating pulse black modal-trigger" href="{{url('/login')}}">
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
