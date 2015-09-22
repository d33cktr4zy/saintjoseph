<!DOCTYPE html>
<html>
<head>
	<!--head section nanti disini -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
			<!--css dan js disini --><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	{!! Html::script('js/bootstrap.js') !!}


	{!! Html::style('//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css') !!}
	{!! Html::style('css/bootstrap-theme.css', ['media'=>'screen']) !!}
	{!! Html::style('css/bootstrap.css') !!}
	{!! Html::style('css/sigkat.css') !!}
	{!! Html::style('css/font-awesome.min.css') !!}
	{!! Html::style('https://fonts.googleapis.com/css?family=Hind+Siliguri', ['rel'=>'stylesheet', 'type' => 'text/css']) !!}
	@yield('topScripts')
	{{--<script src="js/bootstrap.js"></script>--}}
</head>
<body class="sigkat">
<div class="container-fluid" id="mainContainer">
<!-- Header Section -->
@include('template.header')
<!-- Header selesai -->

<!-- konten mulai
     konten tidak dalam file tersendiri karena nanti di render di halaman ini dengan yield
-->
<div class="container" id="konten">
	<div class="row" id="isi">
		<div class="col-lg-12">
			<!-- Ini Isi Konten -->
			@yield('content','Ini Isi Konten')
		</div>
	</div>
</div>
<!-- konten selesai -->

<!-- footer section start here -->
@include('template.footer')
		<!--footer end -->
</div>


</body>
</html>