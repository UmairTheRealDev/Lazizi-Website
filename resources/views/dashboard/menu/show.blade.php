@extends('dashboard.template')

@section('main_section')
@include('dashboard.includes.alerts')

<div class="container">
    <div class="row mb-3">
        <div class="col d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Menu Item</h3>
            <a href="{{ route('menu.add') }}" class="btn btn-primary">Add Menu Item</a>
        </div>
    </div>
</div>
<table class="table table-bordered table-striped  table-responsive col-12">
    <thead>
        <tr>
            <th>Item ID</th>
            <th>Item Name</th>
            <th>Details</th>
            <th>Price</th>
            <th>Category</th>
            <th>Picture</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($menuitem as $item)
        <tr>
            <td>{{ $item->item_id }}</td>
            <td>{{ $item->itemname }}</td>
            <td>{{ $item->detail }}</td>
            <td>${{ number_format($item->price, 2) }}</td>
            <td>{{ $item->category_id  }}</td>
            <td>
                @if($item->picture)
                    <img src="{{ asset($item->picture) }}" alt="{{ $item->itemname }}" width="100" height="80" style="border-radius: 50%">
                @else
                    No image available
                @endif
            </td>
            <td>
                <a href="{{ route('menu.edit', $item->item_id) }}" class="btn btn-sm btn-primary">Edit</a>
            </td>
            <td>
                <a href="{{ route('menu.delete', $item->item_id) }}" class="btn btn-sm btn-danger">Trash</a>
            </td>
        </tr>

        {{-- <tr>
            <td colspan="6" class="text-center">No menu items found.</td>
        </tr> --}}
        @endforeach
    </tbody>
</table>
{{ $menuitem->links('pagination::bootstrap-5') }}

@endsection
