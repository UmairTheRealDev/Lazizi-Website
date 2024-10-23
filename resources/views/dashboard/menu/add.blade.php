@extends('dashboard\template')
@section('main_section')
    @include('dashboard\includes\alerts')
    <h2>Add Menu Item</h2>
    <form action="{{ route('menu.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Item Name Field -->
        <div class="mb-3">
            <label class="form-label">Item Name</label>
            <input class="form-control" type="text" name="itemname" value="{{ old('itemname') }}"
                placeholder="Enter item name" />
            @error('itemname')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Detail Field -->
        <div class="mb-3">
            <label class="form-label">Short Item Detail</label>
            <input class="form-control" name="detail" placeholder="Enter item details" value="{{ old('detail') }}"></input>
            @error('detail')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Price Field -->
        <div class="row mb-3">
            <div class="row mb-3">
                <div class="mb-3 col-md-6">
                    <label class="form-label">Price</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input class="form-control" type="number" step="0.01" name="price"
                            value="{{ old('price') }}" placeholder="Enter price" />
                    </div>
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

            <!-- Category Field -->
            <div class="mb-3 col-md-6">
                <label class="form-label">Category</label>
                <select class="form-control" name="category_id">
                    <option value="">Select Category</option>

                    @foreach ($categories as $category)
                        <option value="{{ $category->cat_id }}" {{ old('category_id') == $category->cat_id ? 'selected' : '' }}>
                            {{ $category->catname }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>

        <!-- Picture Field -->
        <div class="mb-3">
            <label class="form-label">Item Picture</label>
            <input class="form-control" type="file" name="picture" />
            @error('picture')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-lg btn-primary">Add Item</button>
        </div>
    </form>
@endsection
