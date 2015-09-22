@extends('template.utama')
@section('topScripts')
	{!! Html::script('//code.jquery.com/jquery-2.1.1.min.js') !!}
	{!! Html::script('//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js') !!}
	{!! Html::script('//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js') !!}

@endsection
@section('content')

	<div class="container-fluid" id="regis">
		<div class="row" id="regis">
			<div class="col-md-12">
				<h1>Registrasi pengguna (lanjutan)</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				{!! Form::open(['action' => 'UserController@prosesReg', 'method' => 'post', 'class'=>'form-horizontal']) !!}
				<div class="form-group">
					<div class="col-xs-2 text-right">
						{!! Form::label('namaDepan', 'Nama Depan', ['class' => 'control-label']) !!}
					</div>
					<div class="col-xs-4">
						{!! Form::text('namaDepan', null, ['class' => 'form-control', 'id' => 'namaDepan', 'placeholder' => 'Nama Depan']) !!}
					</div>
					<div class="col-xs-4">
						{!! Form::text('namaBelakang', null, ['class' => 'form-control', 'id'=>'namaBelakang', 'placeholder' => 'Nama Belakang']) !!}
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-2 text-right">
						{!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
					</div>
					<div class="col-xs-4">
						{!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder'=>'Password']) !!}
					</div>
					<div class="col-xs-4">
						{!! Form::password('password-konfirm', ['class' => 'form-control', 'id' => 'password-konfirm','placeholder'=>'Konfirmasi Password']) !!}
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-2 text-right">
						{!! Form::label('tempatLahir', 'Tempat/Tanggal Lahir', ['class' => 'control-label']) !!}
					</div>
					<div class="col-xs-2">
						{!! Form::text('tempatLahir', null, ['class' => 'form-control', 'id'=>'tempatLahir', 'placeholder'=>'Tempat Lahir']) !!}
					</div>
					<div class="col-xs-3">
						<div class="input-group date" id="dt1">
							{!! Form::text(null, null, ['class' => 'form-control']) !!}
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
						</div>
					</div>
					<div class="col-xs-5">
						<div class="radio-inline">
							<label class="radio-inline">
								<input type="radio" name="jk">Laki-laki
							</label>
							<label class="radio-inline">
								<input type="radio" name="jk">Perempuan
							</label>
						</div>
					</div>
				</div>
				<!--datepicker Script-->
				<script type="text/javascript">
					$(function(){
						$('#dt1').datetimepicker({locale: 'id', format: 'LL', useCurrent: true, });
					});
				</script>
				<!-- end date picker script -->
				<div class="form-group">
					<div class="col-sm-2 text-right">
						{!! Form::label('alamat', 'Alamat', ['class' => 'control-label']) !!}
					</div>
					<div class="col-sm-8">
						{!! Form::text('alamat', null, ['class' => 'form-control', 'id'=>'alamat', 'placeholder'=>'Alamat']) !!}
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-2 text-right">
						{!! Form::label('kota', 'Kota', ['class' => 'control-label']) !!}   
					</div>
					<div class="col-sm-4">
						{!! Form::text('kota', null, ['class' => 'form-control', 'id'=>'kota', 'placeholder'=>'Kota']) !!}
					</div>
					<div class="col-sm-2 text-right">
						{!! Form::label('kodepos', 'Kode Pos', ['class' => 'control-label']) !!}
					</div>
					<div class="col-sm-2">
						{!! Form::text('kodepos', null, ['class' => 'form-control', 'maxlength'=>'5', 'id'=>'kodepos','placeholder'=>'Kode Pos']) !!}
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<div class="checkbox">
								<label>
									{!! Form::checkbox('setuju', '0', null,  ['id' => 'setuju']) !!}
									Dengan ini saya menyetujui peraturan yang ada pada situs ini
								</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-2">
						{!! Form::submit('Daftar', ['class' => 'btn btn-block btn-danger form-control']) !!}
					</div>
				</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>

	{{--	{!! dd(Input::flash()) !!}--}}


@stop