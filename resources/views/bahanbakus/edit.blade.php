@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($bahanbaku, array('route' => array('bahanbakus.update', $bahanbaku->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('nama', 'Nama', ['class'=>'form-label']) }}
			{{ Form::text('nama', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('stock', 'Stock', ['class'=>'form-label']) }}
			{{ Form::text('stock', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('satuan', 'Satuan', ['class'=>'form-label']) }}
			{{ Form::text('satuan', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('supplier', 'Supplier', ['class'=>'form-label']) }}
			{{ Form::text('supplier', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop
