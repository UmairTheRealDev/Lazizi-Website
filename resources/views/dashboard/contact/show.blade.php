@extends('dashboard.template')
@section('main_section')
    @include('dashboard.includes.alerts')

    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Customer Messages</h3>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message Details</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contact as $contacts)
                        <tr>
                            <td>{{ $contacts->id }}</td>
                            <td>{{ $contacts->name }}</td>
                            <td>{{ $contacts->email }}</td>
                            <td>{{ $contacts->phone_number }}</td>
                            <td>{{ $contacts->msg_subject }}</td>
                            <td>{{ $contacts->message }}</td>
                            <td>{{ $contacts->created_at }}</td>
                            <td>{{ $contacts->updated_at }}</td>
                            <td>
                                <a href="{{ route('contact.delete', $contacts->id) }}" class="btn btn-sm btn-danger delete-confirmation" data-id="{{ $contacts->id }}">Ignore</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
