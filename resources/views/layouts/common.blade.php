<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title')</title>
	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">
	@yield('links')

	<script>
		window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            'pusherKey' => config('broadcasting.connections.pusher.key'),
            'pusherCluster' => config('broadcasting.connections.pusher.options.cluster')
        ]) !!};
	</script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/responsiveheader.css')}}">
</head>

<body>

	<header>

		<div class="logo">
			<img src="{{asset('img/theme/clipart999521.png')}}">
			<span class="c-name">Messaging</span>
			<span class="btn-toggle" style="margin-top: 10px;">
				<span style="border: 1px solid white; display: block; margin: 10px 3px; width:30px"></span>
				<span style="border: 1px solid white; display: block; margin: 10px 3px; width:30px"></span>
				<span style="border: 1px solid white; display: block; margin: 10px 3px; width:30px"></span>
			</span>
			{{-- ≡</span> --}}
		</div>

		<nav class="nav hide">
			<ul>
				<li><a href="">Home</a></li>

				<li><a href="https://saadsaheed.com.ng">Contact Us</a></li>

				<li><a href="https://saadsaheed.com.ng">About Us</a></li>

				<li> <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
								  document.getElementById('logout-form').submit();">
						{{ __('Logout') }}
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
					</form>
				</li>
			</ul>
		</nav>

	</header>
	<div id="app">
		<main>

			@yield('content')

		</main>
	</div>

	<script type="text/javascript">
		var btn = document.querySelector('.btn-toggle');

		btn.addEventListener('click', () => {
			
			var nav = document.querySelector('.show');

			 	if(nav != null)
			    {
			        nav.classList.replace('show', 'hide');
			    }
			    else
			    {
			        let navbar2 = document.querySelector('.hide');
			        if(navbar2 != null)
			        {
			            navbar2.classList.replace('hide', 'show');
			        }
			        else{
			            let nav = document.querySelector('.nav');
			            nav.classList.add('show'); 
			        }
			    } 
		}, false);

	</script>
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{ asset('js/app.js') }}" defer></script>
	<script src="{{asset('js/js.cookie.js')}}"></script>
	@yield('jslinks')
</body>

</html>