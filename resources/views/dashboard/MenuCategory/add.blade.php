@extends('dashboard\template')
@section('main_section')
@include('dashboard\includes\alerts')
<h2>Add Menu Category</h2>
<form action="{{ route('category.add') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Category Name</label>
        <input class="form-control" type="text" name="catname" value="{{ old('catname') }}" placeholder="Enter category name" />
        @error('catname')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Category Picture</label>
        <input class="form-control" type="file" name="category_pic" />
        @error('category_pic')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="text-center mt-3">
        <button type="submit" class="btn btn-lg btn-primary">Add Category</button>
    </div>
</form>


@endsection
