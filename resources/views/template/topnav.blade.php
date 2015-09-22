<div class="row vertical-center" id="top-nav">
	<div class="col-xs-5">
		<!-- decide login or not -->
		<div id="sessionNote" class="">
			@if(Auth::user() !== null)
					<!-- Loggedin -->

			<p>Hi, {!! Auth::user() !!}!! | <a href="{!! action('UserController@destroy') !!}">Logout</a></p>

			@else
					<!-- Not Logged in-->
			<a href="{!! route('login') !!}">Login</a> / <a href="{!! action('UserController@tampilRegSatu') !!}">Daftar</a>
			@endif
		</div>
	</div>
	<div class="col-xs-3 col-xs-offset-4">Bread Crumb</div>
</div>