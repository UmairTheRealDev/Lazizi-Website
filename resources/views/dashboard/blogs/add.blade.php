@extends('dashboard\template')
@section('main_section')
@include('dashboard\includes\alerts')
<h2>Add Blog Post</h2>

<form action="{{ route('blog.add') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <!-- Topic -->
    <div class="mb-3">
        <label class="form-label">Topic</label>
        <input class="form-control form-control-lg" type="text" name="topic" value="{{ old('topic') }}" placeholder="Enter Blog Topic" required />
        @error('topic')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <!-- Content -->
    <div class="mb-3">
        <label class="form-label">Content</label>
        <textarea class="form-control form-control-lg" name="content" rows="5" placeholder="Enter Blog Content" required>{{ old('content') }}</textarea>
        @error('content')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Author Name -->
    <div class="mb-3">
        <label class="form-label">Author Name</label>
        <input class="form-control form-control-lg" type="text" name="author_name" value="{{ old('author_name') }}" placeholder="Enter Author Name" required />
        @error('author_name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Featured Image -->
    <div class="mb-3">
        <label class="form-label">Featured Image</label>
        <input class="form-control form-control-lg" type="file" name="featured_image" />
        @error('featured_image')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Description Image -->
    <div class="mb-3">
        <label class="form-label">Description Image</label>
        <input class="form-control form-control-lg" type="file" name="description_image" />
        @error('description_image')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Tags -->
    <div class="mb-3">
        <label class="form-label">Tags</label>
        <input class="form-control form-control-lg" type="text" name="tags" value="{{ old('tags') }}" placeholder="Enter Tags (comma-separated)" required />
        @error('tags')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Submit Button -->
    <div class="text-center mt-3">
        <button type="submit" class="btn btn-lg btn-primary">Submit Blog</button>
    </div>
</form>
@endsection