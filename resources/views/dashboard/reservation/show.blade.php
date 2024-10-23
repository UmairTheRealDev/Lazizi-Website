@extends('dashboard.template')
@section('main_section')
    @include('dashboard.includes.alerts')

    <h2>Reservations</h2>

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Persons</th>
                    <th>Reservation Date</th>
                    <th>Time</th>
                    <th>Email</th>
                    <th>Reserved By</th>
                    <th>Status</th>
                    <th style="text-align: center; width: 12vw;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->id }}</td>
                        <td>{{ $reservation->name }}</td>
                        <td>{{ $reservation->phone }}</td>
                        <td>{{ $reservation->persons }}</td>
                        <td>{{ $reservation->reservation_date }}</td>
                        <td>{{ $reservation->time }}</td>
                        <td>{{ $reservation->email }}</td>
                        <td>{{ $reservation->reserved_by }}</td>
                        <td>
                            @if ($reservation->status == 'Reserved')
                                <span class="badge bg-info">{{ $reservation->status }}</span>
                            @elseif($reservation->status == 'Approved')
                                <span class="badge bg-success">{{ $reservation->status }}</span>
                            @elseif($reservation->status == 'Cancelled')
                                <span class="badge bg-secondary">{{ $reservation->status }}</span>
                            @endif
                        </td>
                        <td style="text-align: center;">
                            @if ($reservation->status == 'Cancelled')
                                <a href="{{ route('reservation.delete', $reservation->id) }}" class="btn btn-sm btn-danger"
                                    style="width: 100%">Delete</a>
                            @elseif($reservation->status == 'Approved')
                                <a href="{{ route('reservation.cancel', $reservation->id) }}" style="width: 100%"
                                    class="btn btn-sm btn-warning">Cancel</a>
                            @else
                                <a href="{{ route('reservation.update', $reservation->id) }}"
                                    class="btn btn-sm btn-primary">Approve</a>
                                <a href="{{ route('reservation.cancel', $reservation->id) }}"
                                    class="btn btn-sm btn-danger">Cancel</a>
                        @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
