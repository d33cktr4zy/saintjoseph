@extends('template.utama')
@section('content')
	<div class="section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1>Registrasi Pengguna</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					{!! Form::open(['action' => 'UserController@tampilRegDua', 'role' => 'form', 'class' => 'form-horizontal' ]) !!}
						<div class="form-group">
							<div class="col-sm-2 text-right">
								{!! Form::label('username', 'Username :', ['class' => 'control-label']) !!}
							</div>
							<div class="col-sm-4">
								{!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Username', 'id'=>'username']) !!}
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-2 text-right">
								{!! Form::label('email', 'Email :', ['class' => 'control-label']) !!}
							</div>
							<div class="col-sm-4">
								{!! Form::email('email',null , ['class' => 'form-control', 'placeholder' => 'Masukkan E-mail', 'id'=>'email']) !!}
							</div>
							<div class="col-sm-4">
								{!! Form::email('email-konfirm',null , ['class' => 'form-control', 'placeholder' => 'Konfirmasi E-mail', 'id'=>'email-konfirm']) !!}
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-8">
								<div class="checkbox">
									<label>
										{!! Form::checkbox('umat', '0', null,  ['id' => 'umat']) !!}
										Apakah Anda umat St. Joseph
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-2 text-right">
								{!! Form::label('idumat', 'ID Umat :', ['class' => 'control-label']) !!}
							</div>
							<div class="col-sm-4">
								{!! Form::text('idumat', '', ['class' => 'form-control', 'id' => 'idumat', 'placeholder' => 'ID Umat']) !!}
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-4">
								<button class="btn btn-block ">
									{!! Form::submit('Daftar', ['class' => 'btn btn-block btn-danger btn-lg']) !!}
								</button>
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@stop