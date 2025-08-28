@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open(['route' => 'suppliers.store']) !!}

		<div class="mb-3">
			{{ Form::label('nama', 'Nama', ['class'=>'form-label']) }}
			{{ Form::text('nama', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('username', 'Username', ['class'=>'form-label']) }}
			{{ Form::text('username', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('password', 'Password', ['class'=>'form-label']) }}
			{{ Form::text('password', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('alamat', 'Alamat', ['class'=>'form-label']) }}
			{{ Form::text('alamat', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('no_hp', 'No_hp', ['class'=>'form-label']) }}
			{{ Form::text('no_hp', null, array('class' => 'form-control')) }}
		</div>


		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}


@stop