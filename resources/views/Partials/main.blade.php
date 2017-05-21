<!DOCTYPE html>

<html lang="en">

	@include('Partials._head')

	<body>

		@include('Partials._nav')

			<div class="maincontent padding-top-130">
				<div class="container" style="padding-top: 10px;">
					@include('Partials._messages')
			    	@yield('content')
			    	@include('Partials._footer')
				</div>
			</div>

		@include('Partials._javascripts')
		@yield('scripts')

	</body>

</html>