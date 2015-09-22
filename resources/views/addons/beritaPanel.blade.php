<!-- hilight Berita -->

<div class="row" id="hiliteBerita">
	@foreach(stjo\Model\Berita::orderBy('waktu_berita','desc')->take(3)->get() as $berita)
		<div class="list-group col-xs-4 ringkasBerita" id="">
			<a class="list-group-item list-group-item-danger" href="/berita/{!! $berita->id_berita !!}">
				<h4 class="list-group-item-heading">{!! str_limit($berita->jdl_berita,30,'...') !!}</h4>
			</a>
			<div class="list-group-item list-item-body"><p>{!! str_limit($berita->isi_berita,70,'<a href="">Read More</a>') !!}</p></div>
		</div>
	@endforeach
</div>

<!-- hilight Berita -->