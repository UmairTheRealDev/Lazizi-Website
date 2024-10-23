@extends('dashboard.template')

@section('main_section')
    @include('dashboard.includes.alerts')

    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col d-flex justify-content-between align-items-center">
                <h3 class="mb-0">Deleted Menu Items</h3>
                <a href="{{ route('menu.add') }}" class="btn btn-primary">Add Menu Item</a>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover w-100">
                <thead>
                    <tr>
                        <th>Item ID</th>
                        <th>Item Name</th>
                        <th>Details</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Picture</th>
                        <th colspan="2" style="text-align: center;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($menuitem as $item)
                        <tr>
                            <td>{{ $item->item_id }}</td>
                            <td>{{ $item->itemname }}</td>
                            <td>{{ $item->detail }}</td>
                            <td>${{ number_format($item->price, 2) }}</td>
                            <td>{{ $item->category_id }}</td>
                            <td>
                                @if($item->picture)
                                    <img src="{{ asset($item->picture) }}" alt="{{ $item->itemname }}" width="100" height="80" style="border-radius: 50%;">
                                @else
                                    No image available
                                @endif
                            </td>
                            <td style="text-align: center;">
                                <a href="{{ route('menu.restore', $item->item_id) }}" class="btn btn-sm btn-primary">Restore</a>
                            </td>
                            <td style="text-align: center;">
                                <a href="{{ route('menu.permdeleted', $item->item_id) }}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">No deleted menu items found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
