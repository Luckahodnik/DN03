<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script src="{{ asset('js/app.js') }}" defer></script>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title>Mobilni e-Arhiv</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/mystyle.css') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}" media="screen,projection"/>

	<script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
</head>
<body>
				@component('components.navbar')

			@endcomponent
			{{--
    <div >
        <nav class="nav-wrapper navbar-expand-md green ">
            <div class="row">
														<a href="{{ route('homeView') }}">
																<img class="logo" src="slike/logo.svg"/></a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
																								@guest
																												<li>
																													<a id ="menu_h" href="{{ route('homeView') }}">
																														Domov
																													</a>
																												</li>
                            <li class="nav-item">
                                <a href="{{ route('login') }}">{{ __('Vpiši se') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}">{{ __('Registriraj se') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
 --}}
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
