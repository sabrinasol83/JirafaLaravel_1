<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Title de Pagina-->
  <title>@yield('title')</title>

	<!-- Styles -->
  <link href="/css/styles.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet"  integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="/IMG/iconbeer.ico" rel="icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
  <header class="nav-header">
		@if (Auth::guest())
			<input type="checkbox" id="abrir-cerrar" name="abrir-cerrar" value="">
			<label for="abrir-cerrar"><a href="{{ route('login') }}" class="btn-home">LOGIN</a><span class="abrir">&#9776;</span><span class="cerrar">X</span></label>
		@else
			<input type="checkbox" id="abrir-cerrar" name="abrir-cerrar" value="">
			<label for="abrir-cerrar"><a href="/products" class="btn-home">Shop!</a><span class="abrir">&#9776;</span><span class="cerrar">X</span></label>
		@endif
        <div id="sidebar" class="sidebar">
            <ul class="menu">
              <li><a class="ancla" href="/">home</a></li>
              <li><a class="ancla" href="/#section-nosotros">nosotros</a></li>
              <li><a class="ancla" href="/products">beers</a></li>
              {{-- <li><a href="/products">productos</a></li> --}}
              @if (!Auth::guest())
                <li><a class="ancla" href="/cart"><i class="fas fa-shopping-cart"></i></a></li>
                <li><a class="ancla" href="/history">Mis compras</a></li>
              @endif
							<!-- Authentication Links -->
							@if (Auth::guest())
              	<li class="derecha ancla"><a class="itemNav" href="{{ route('login') }}">Login</a></li>
              	<li class="derecha ancla"><a class="itemNav" href="{{ route('register') }}">Register</a></li>
         			 @else
							<li>
								<a class="ancla" href="{{ route('logout') }}" 
										onclick="event.preventDefault();
														 document.getElementById('logout-form').submit();" class="dropdown-toggle" data-toggle="dropdown">
										Logout
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
								</form>
						</li>
						<li class="derecha ancla"><a href="/profile" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
							<img src="/storage/foto_perfil/{{ Auth::user()->foto_perfil }}" class="avatar" alt="Img perfil usuario"><span class="caret">mi perfil: 
									{{ Auth::user()->name }}</span>
					</a></li>
          @endif
            </ul>
        </div>

    </header>
  @yield('content')
  @yield('main')

      <footer class="footer">
        <div class="iconos">
          <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
        </div>
        <p class="nota">Beber con moderación. Prohibida su venta a menores de 18 años.</p>
        <h5 class="copy-footer">Jirafa BrewHouse ® Todos los derechos reservados</h5>


      </footer>
      {{-- <script src="/js/custom.js"></script> --}}
  </body>
</html>
