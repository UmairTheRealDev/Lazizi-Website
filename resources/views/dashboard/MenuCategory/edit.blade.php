@extends('dashboard\template')
@section('main_section')
    @include('dashboard\includes\alerts')
    <h3>Update Menu Category</h3>
    <form action="{{ route('category.update', $category->cat_id  ) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Category Name</label>
            <input class="form-control" type="text" name="catname" value="{{ $category->catname }}"
                placeholder="Enter category name" />
            @error('catname')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <p>Existing Picture</p>
        <img src="{{ asset('uploads/categories/' . $category->category_pic) }}" height="150" width="150" alt="">
        <div class="mb-3">
            <label class="form-label">Update Category Picture</label>
            <input class="form-control" type="file" name="category_pic" />
            @error('category_pic')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="text-center mt-3">
            <button type="submit" class="btn btn-lg btn-primary">Update Category</button>
        </div>
    </form>
@endsection
