@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('barangs.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>menu</th>
				<th>harga</th>
				<th>stock</th>
				<th>deskripsi</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($barangs as $barang)

				<tr>
					<td>{{ $barang->id }}</td>
					<td>{{ $barang->menu }}</td>
					<td>{{ $barang->harga }}</td>
					<td>{{ $barang->stock }}</td>
					<td>{{ $barang->deskripsi }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('barangs.show', [$barang->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('barangs.edit', [$barang->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['barangs.destroy', $barang->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
