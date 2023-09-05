@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-4 d-flex justify-content-between">
                    <h2>List of Policemen</h2>
                    <a href="{{ route('policemen.create') }}" class="btn btn-primary">Create Policeman</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Matricule</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($policemen as $policeman)
                            <tr>
                                <td>{{ $policeman->id }}</td>
                                <td>{{ $policeman->matricule }}</td>
                                <td>{{ $policeman->first_name }}</td>
                                <td>{{ $policeman->last_name }}</td>
                                <td>{{ $policeman->email }}</td>
                                <td>
                                    <a href="{{ route('policemen.edit', $policeman->id) }}" class="btn btn-info">Edit</a>
                                    <form action="{{ route('policemen.destroy', $policeman->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
