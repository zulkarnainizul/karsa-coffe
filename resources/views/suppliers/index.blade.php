@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('suppliers.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>nama</th>
				<th>username</th>
				<th>password</th>
				<th>alamat</th>
				<th>no_hp</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($suppliers as $supplier)

				<tr>
					<td>{{ $supplier->id }}</td>
					<td>{{ $supplier->nama }}</td>
					<td>{{ $supplier->username }}</td>
					<td>{{ $supplier->password }}</td>
					<td>{{ $supplier->alamat }}</td>
					<td>{{ $supplier->no_hp }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('suppliers.show', [$supplier->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('suppliers.edit', [$supplier->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['suppliers.destroy', $supplier->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
