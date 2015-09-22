{{--{!! dd($pengumuman, $forum) !!}--}}
@extends('template.utama')
@section('content')
		<!-- Kontent Kiri -->
<div class="col-xs-9">
	@include('addons.carousel')
	@include('addons.beritaPanel')


	<!-- Hilite Pengumuman -->

		@include('addons.highlightPengumuman')
	<!-- end Hilight Pengumuman -->

	<!-- Latest forum -->
	<div class="row" id="hiliteForum">
		<div class="col-xs-12">
			<h4>Kiriman Forum Terakhir</h4>
			<hr/>
			@foreach($forum as $post )
				<p>{!! $post['isi_post'] !!}</p>
				<hr/>
			@endforeach

		</div>
	</div>
	<!-- end Latest forum -->

</div>
<!-- end Kontent Kiri -->

<!-- Sidebar -->
<div class="col-xs-3">
	@include('template.sidebar')
</div>
<!-- end Sidebar -->
@stop
