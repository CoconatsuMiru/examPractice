@extends('layouts.app')

@section('title', 'Player List')

@section('content')

    <table class="table table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Last Name</th>
                <th>IGN</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($name as $names)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $names->last_name }}</td>
                    <td>{{ $names->ign }}</td>
                    <td>
                        <button class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i> Add</button>
                        <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i> Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-3">
        {!! $name->links() !!}
    </div>

@endsection