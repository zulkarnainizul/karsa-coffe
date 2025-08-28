@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('bahanbakus.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>nama</th>
				<th>stock</th>
				<th>satuan</th>
				<th>supplier</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($bahanbakus as $bahanbaku)

				<tr>
					<td>{{ $bahanbaku->id }}</td>
					<td>{{ $bahanbaku->nama }}</td>
					<td>{{ $bahanbaku->stock }}</td>
					<td>{{ $bahanbaku->satuan }}</td>
					<td>{{ $bahanbaku->supplier }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('bahanbakus.show', [$bahanbaku->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('bahanbakus.edit', [$bahanbaku->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['bahanbakus.destroy', $bahanbaku->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
