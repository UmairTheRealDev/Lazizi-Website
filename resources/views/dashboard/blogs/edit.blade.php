@extends('dashboard\template')
@section('main_section')
@include('dashboard\includes\alerts')
<h3>Update Blog</h3>
<form action="{{ route('blog.update', $blog->id) }}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Topic</label>
        <input class="form-control form-control-lg" type="text" name="topic"
            value="{{ $blog->topic}}" placeholder="Enter your Topic" />
       @error('topic')
       <div class="text-danger">{{ $message }}</div>
       @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Content</label>
        <input class="form-control form-control-lg" type="text" name="content"
            value="{{ $blog->content}}" placeholder="Enter your Content" />
       @error('content')
       <div class="text-danger">{{ $message }}</div>
       @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Author Name</label>
        <input class="form-control form-control-lg" type="text" name="author_name"
            value="{{ $blog->author_name}}" placeholder="Enter Author Name" />
       @error('author_name')
       <div class="text-danger">{{ $message }}</div>
       @enderror
    </div>

<p>Existing Picture</p>
<img src="{{asset('uploads/featured-images/' . $blog->featured_image)}}" height="150" width="150" alt="">
    <div class="mb-3">
        <label class="form-label">Update Featured Picture</label>
        <input class="form-control form-control-lg" type="file" name="featured_image"/>
        @error('featured_image')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>


<p>Existing Picture</p>
<img src="{{asset('uploads/description-images/' . $blog->description_image)}}" height="150" width="150" alt="">
    <div class="mb-3">
        <label class="form-label">Update Featured Picture</label>
        <input class="form-control form-control-lg" type="file" name="description_image"/>
        @error('description_image')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Tags</label>
        <input class="form-control form-control-lg" type="text" name="tags"
            value="{{ $blog->tags}}" placeholder="Enter Tags (comma-separated)" />
       @error('tags')
       <div class="text-danger">{{ $message }}</div>
       @enderror
    </div>

    <div class="text-center mt-3">
        <button type="submit" class="btn btn-lg btn-primary">Update Blog</button>
    </div>
</form>
@endsection
