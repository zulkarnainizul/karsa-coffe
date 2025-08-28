@extends('default')

@section('content')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($transaksi, array('route' => array('transaksis.update', $transaksi->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('nama_pelanggan', 'Nama_pelanggan', ['class'=>'form-label']) }}
			{{ Form::text('nama_pelanggan', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('nama_menu', 'Nama_menu', ['class'=>'form-label']) }}
			{{ Form::text('nama_menu', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('tanggal_pembelian', 'Tanggal_pembelian', ['class'=>'form-label']) }}
			{{ Form::text('tanggal_pembelian', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('jumlah', 'Jumlah', ['class'=>'form-label']) }}
			{{ Form::text('jumlah', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('total_bayar', 'Total_bayar', ['class'=>'form-label']) }}
			{{ Form::text('total_bayar', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('status_pembayaran', 'Status_pembayaran', ['class'=>'form-label']) }}
			{{ Form::text('status_pembayaran', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
@stop
