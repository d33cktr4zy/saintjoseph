@extends('template.utama')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<h1>Manajemen Forum</h1>
				<hr style="display: block;">
				<h2 style="display: block;">Forum Kategori</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4">
				{!! Form::open(['role'=>'form']) !!}
					<div class="form-group">
						<label class="control-label" for="namaKategori">Nama Kategori</label>
						@if(isset($edit))
							<input type="text" class="form-control" id="namaKategori" placeholder="Nama Kategori" name="namaKategori" value="{!! $katEdit->nm_kategori !!}">
						@else
							<input type="text" class="form-control" id="namaKategori" placeholder="Nama Kategori" name="namaKategori">
						@endif

						{!! $errors->first('namaKategori', '<span class="help-block">:message</span>') !!}
						@if(isset($edit))
						{!! Form::hidden('id',$katEdit->id_kategori) !!}
						@endif
					</div>
					<div class="form-group">
						<label class="control-label crsa-selected" for="desc">Deskripsi Kategori</label>
						@if(isset($edit))
							<textarea class="form-control" rows="4" id="desc" name="desc">{!! $katEdit->kat_desc !!}</textarea>
						@else
							<textarea class="form-control" rows="4" id="desc" name="desc"></textarea>
						@endif

					</div>
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-danger">Batal</button>
						@if(isset($edit))
							<button type="submit" class="btn btn-primary" name="edit" value="edit">Simpan</button>
						@else
							<button type="submit" class="btn btn-primary" name="simpan" value="simpan">Simpan</button>
						@endif

					</div>
				{!! Form::close() !!}
			</div>
			<div class="col-xs-8">
				<div class="row">
					<table class="table">
						<thead>
						<tr>
							<th>id</th>
							<th>Nama Kategori</th>
							<th>Deskripsi</th>
							<th>Last Post</th>
							<th>Aksi</th>
						</tr>
						</thead>
						<tbody>
						@foreach($kat as $kategori)

						<tr>
							<td>{!! $kategori->id_kategori !!}</td>
							<td>{!! $kategori->nm_kategori !!}</td>
							<td>{!! $kategori->kat_desc !!}</td>
							<td>@if(!is_null($kategori->id_last_post))
								{!! $kategori->id_last_post !!}
									@else
								--
									@endif
							</td>
							<td>
								<a href="/forum/manKat/edit/{!! $kategori->id_kategori !!}"><i class="fa fa-pencil"></i></a>
								&nbsp;
								<a href="/forum/manKat/delete/{!! $kategori->id_kategori !!}"><i class="fa fa-trash-o"></i></a>
							</td>
						</tr>
						@endforeach
						</tbody>
					</table>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<ul class="pager pull-right list-inline">
							<li>
								<a href="{!! $kat->previousPageUrl() !!}">Previous</a>
							</li>

							<li>
								<a href="{!! $kat->nextPageUrl() !!}">Next</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop