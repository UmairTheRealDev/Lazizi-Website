@extends('dashboard.template')
@section('main_section')
    @include('dashboard.includes.alerts')

    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Menu Categories</h3>
                <a href="{{ route('category.add') }}" class="btn btn-primary">Add Category</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered w-100">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col" style="width: 20vw;">Category Name</th>
                        <th scope="col" style="width: 20vw;">Category Picture</th>
                        <th scope="col">Created At</th>
                        <th scope="col" style="width: 15vw; text-align: center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($category as $cat)
                        <tr>
                            <td>{{ $cat->cat_id }}</td>
                            <td>{{ $cat->catname }}</td>
                            <td><img src="{{ asset('uploads/categories/'.$cat->category_pic) }}" style="border-radius: 50%;" height="90px" width="100px" alt="{{ $cat->catname }}"></td>
                            <td>{{ $cat->created_at }}</td>
                            <td style="text-align: center;">
                                <a href="{{ route('category.edit', $cat->cat_id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ route('category.delete', $cat->cat_id) }}" class="btn btn-sm btn-danger delete-confirmation" data-id="{{ $cat->cat_id }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
