@extends('dashboard.template')
@section('main_section')
@include('dashboard.includes.alerts')

<h2>Add Chef</h2>
<form action="{{ route('chief.add') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Chief Name Field -->
    <div class="mb-3">
        <label class="form-label">Chef Name</label>
        <input class="form-control" type="text" name="chief_name" value="{{ old('chief_name') }}" placeholder="Enter chief name" />
        @error('chief_name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Nationality Field -->
    <div class="mb-3">
        <label class="form-label">Nationality</label>
        <input class="form-control" type="text" name="nationality" value="{{ old('nationality') }}" placeholder="Enter nationality" />
        @error('nationality')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Speciality Field -->
    <div class="mb-3">
        <label class="form-label">Speciality</label>
        <input class="form-control" type="text" name="speciality" value="{{ old('speciality') }}" placeholder="Enter speciality" />
        @error('speciality')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Experience Field -->
    <div class="mb-3">
        <label class="form-label">Experience (Years)</label>
        <input class="form-control" type="number" name="experience" value="{{ old('experience') }}" placeholder="Enter years of experience" />
        @error('experience')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Chief Picture Field -->
    <div class="mb-3">
        <label class="form-label">Chef Picture</label>
        <input class="form-control" type="file" name="chief_picture" />
        @error('chief_picture')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Submit Button -->
    <div class="text-center mt-3">
        <button type="submit" class="btn btn-lg btn-primary">Add Chef</button>
    </div>
</form>
@endsection
