@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open(['route' => 'barangs.store']) !!}

		<div class="mb-3">
			{{ Form::label('menu', 'Menu', ['class'=>'form-label']) }}
			{{ Form::text('menu', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('harga', 'Harga', ['class'=>'form-label']) }}
			{{ Form::text('harga', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('stock', 'Stock', ['class'=>'form-label']) }}
			{{ Form::text('stock', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('deskripsi', 'Deskripsi', ['class'=>'form-label']) }}
			{{ Form::text('deskripsi', null, array('class' => 'form-control')) }}
		</div>


		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}


@stop