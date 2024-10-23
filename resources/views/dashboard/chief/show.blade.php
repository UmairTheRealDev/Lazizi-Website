@extends('dashboard.template')

@section('main_section')
    @include('dashboard.includes.alerts')

    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Cheff Data</h3>
                <a href="{{ route('chief.add') }}" class="btn btn-primary">Add Cheff</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover w-100">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th style="width: 15vw;">Chef Name</th>
                        <th>Nationality</th>
                        <th style="width: 15vw;">Speciality</th>
                        <th>Experience</th>
                        <th>Picture</th>
                        <th style="width: 12vw; text-align: center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($chiefs as $chief)
                        <tr>
                            <td>{{ $chief->id }}</td>
                            <td>{{ $chief->chief_name }}</td>
                            <td>{{ $chief->nationality }}</td>
                            <td>{{ $chief->speciality }}</td>
                            <td>{{ $chief->experience }}</td>
                            <td>
                                @if($chief->chief_picture)
                                    <img src="{{ asset($chief->chief_picture) }}" alt="{{ $chief->chief_name }}" width="100" height="80" style="border-radius: 50%;">
                                @else
                                    No Picture
                                @endif
                            </td>
                            <td style="text-align: center;">
                                <a href="{{ route('chief.edit', $chief->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ route('chief.delete', $chief->id) }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No Chefs Available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
