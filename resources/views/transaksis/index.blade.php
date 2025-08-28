@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('transaksis.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>nama_pelanggan</th>
				<th>nama_menu</th>
				<th>tanggal_pembelian</th>
				<th>jumlah</th>
				<th>total_bayar</th>
				<th>status_pembayaran</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($transaksis as $transaksi)

				<tr>
					<td>{{ $transaksi->id }}</td>
					<td>{{ $transaksi->nama_pelanggan }}</td>
					<td>{{ $transaksi->nama_menu }}</td>
					<td>{{ $transaksi->tanggal_pembelian }}</td>
					<td>{{ $transaksi->jumlah }}</td>
					<td>{{ $transaksi->total_bayar }}</td>
					<td>{{ $transaksi->status_pembayaran }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('transaksis.show', [$transaksi->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('transaksis.edit', [$transaksi->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['transaksis.destroy', $transaksi->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
