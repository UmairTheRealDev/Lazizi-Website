@extends('website\webtemplate')
@section('web-content')

<div class="pag-banner-area contact-pages-area jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
    <div class="container">
        <div class="page-banner-content">
            <h1>My Reservation</h1>
            <ul>
                <li><a href="{{ route('website.home') }}">Home</a></li>
                <li>Reservation</li>
            </ul>
        </div>
    </div>
    <div class="page-banner-shape">
        <img src="{{ asset('website/images/page/page-banner-shape-1.webp')}}" alt="images">
    </div>
</div>
    <div class="mx-4 my-4">
        <table class="table-responsive col-12 mx-4" style="background-color: rgba(0, 0, 0, 0); color: white; padding: 30px">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Persons</th>
                    <th>Reservation Date</th>
                    <th>Time</th>

                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->name }}</td>
                        <td>{{ $reservation->phone }}</td>
                        <td>{{ $reservation->persons }}</td>
                        <td>{{ $reservation->reservation_date }}</td>
                        <td>{{ $reservation->time }}</td>
                        <td>{{ $reservation->email }}</td>
                       <td>
                        @if ($reservation->status == 'Reserved')
                            <a type="button" class="btn btn-info position-relative">
                                {{ $reservation->status }}
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">

                                    <span class="visually-hidden">unread messages</span>
                                </span>
                            </a>
                        @elseif($reservation->status == 'Approved')
                            <a type="button" class="btn btn-success position-relative">
                                {{ $reservation->status }}
                            </a>
                        @elseif($reservation->status == 'Cancelled')
                            <a type="button" class="btn btn-secondary position-relative">
                                {{ $reservation->status }}
                            </a>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('reservation.cancel', $reservation->id) }}"
                            class="btn btn-sm btn-danger">Cancel</a>

                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
