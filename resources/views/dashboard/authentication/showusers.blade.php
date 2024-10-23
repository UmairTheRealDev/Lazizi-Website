@extends('dashboard.template')
@section('main_section')
    @include('dashboard.includes.alerts')

    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Users Data</h3>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered w-100">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>
                        <th scope="col">Usertype</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Created At</th>
                        <th scope="col" style="text-align: center; width: 20vw ">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->usertype }}</td>
                            <td>{{ $user->contact }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td style="text-align: center;">
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ route('users.delete', $user->id) }}" class="btn btn-sm btn-danger delete-confirmation" data-id="{{ $user->id }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
