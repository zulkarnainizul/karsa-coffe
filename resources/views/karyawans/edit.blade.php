@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($karyawan, array('route' => array('karyawans.update', $karyawan->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('nama', 'Nama', ['class'=>'form-label']) }}
			{{ Form::text('nama', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('password', 'Password', ['class'=>'form-label']) }}
			{{ Form::text('password', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('no_hp', 'No_hp', ['class'=>'form-label']) }}
			{{ Form::text('no_hp', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('status', 'Status', ['class'=>'form-label']) }}
			{{ Form::text('status', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop
