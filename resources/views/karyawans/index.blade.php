@extends('default')

@section('content')

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('karyawans.create') }}" class="btn btn-info">Create</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>nama</th>
				<th>password</th>
				<th>no_hp</th>
				<th>status</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($karyawans as $karyawan)

				<tr>
					<td>{{ $karyawan->id }}</td>
					<td>{{ $karyawan->nama }}</td>
					<td>{{ $karyawan->password }}</td>
					<td>{{ $karyawan->no_hp }}</td>
					<td>{{ $karyawan->status }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('karyawans.show', [$karyawan->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('karyawans.edit', [$karyawan->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['karyawans.destroy', $karyawan->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
