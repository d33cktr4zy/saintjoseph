<div class="row" id="hilitePengumuman">
	<div class="col-xs-12">
		@foreach($pengumuman as $umum => $val)
			<h4>Pengumuman tanggal, {!! \Carbon\Carbon::createFromFormat('Y-m-d',$umum)->format(' d F Y') !!} </h4>
			<hr/>
			@foreach($pengumuman[$umum] as $umums)
				<h5 style="color:red;">{!! $umums['tema_pengumuman'] !!}</h5>
				<p>{!! $umums['isi_pengumuman'] !!}</p>
			@endforeach
			<hr/>
		@endforeach
	</div>
</div>