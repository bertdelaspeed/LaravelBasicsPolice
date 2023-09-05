@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Policeman Record</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('policemen.update', $policeman->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                    value="{{ $policeman->first_name }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                    value="{{ $policeman->last_name }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="matricule" class="form-label">Matricule</label>
                                <input type="text" class="form-control" id="matricule" name="matricule"
                                    value="{{ $policeman->matricule }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $policeman->email }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Policeman</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
