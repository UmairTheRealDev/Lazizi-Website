<?php

namespace App\Http\Controllers;

use App\Jobs\UpdateReservationStatusJob;
use App\Models\ReservationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationApproved;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'persons' => 'required|integer|min:1',
            'reservation_date' => 'required|date_format:m/d/Y|after:today',
            'time' => 'required|string',
            'email' => 'required|email|max:255',
        ]);

        $reservation = new ReservationModel([
            'name' => $request->name,
            'phone' => $request->phone,
            'persons' => $request->persons,
            'reservation_date' => $request->reservation_date,
            'time' => $request->time,
            'email' => $request->email,
            'reserved_person_id' => Auth::user()->id,
            'reserved_by' => Auth::user()->name,
        ]);

        if($reservation->save())
        {
            $sendEmail = [
                'message' => "Hello {$reservation->name},\n\n" .
                            "Your reservation has been booked successfully. Here are your reservation details:\n\n" .
                            "Date: {$reservation->reservation_date}\n" .
                            "Time: {$reservation->time}\n" .
                            "Number of Persons: {$reservation->persons}\n\n" .
                            "We look forward to seeing you!",
                'subject' => 'Reservation Confirmation'
            ];
    
            Mail::to($reservation->email)->send(new ReservationApproved($sendEmail['message'], $sendEmail['subject']));
    
            return redirect()->back()->with('success', 'Your table has been reserved successfully! A confirmation email has been sent.');
        }
        else
        {
            return redirect()->back()->with('failure', 'Failed to reserve the table. Please try again.');

        }
    }
    /**
     * Display the specified resource.
     */
    public function show()
{
    $reservations = ReservationModel::all();
    return view('dashboard\reservation\show', compact('reservations'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // Find the reservation
    $reserve = ReservationModel::find($id);
    
    // Update status to Approved
    $reserve->status = "Approved";
    $reserve->save();

        $sendEmail = [
            'message' => "Hello {$reserve->name},\n\n" .
            "Your reservation has been approved successfully. Here are your reservation details:\n\n" .
            "Date: {$reserve->reservation_date}\n" .
            "Time: {$reserve->time}\n" .
            "Number of Persons: {$reserve->persons}\n\n" .
            "We look forward to seeing you!",
            'subject' => 'Reservation Confirmation'
        ];

        Mail::to($reserve->email)->send(new ReservationApproved($sendEmail['message'], $sendEmail['subject']));

        return redirect()->back()->with('success', 'Reservation Approved Successfully and email sent.');
    
}
    public function canceled(string $id)
    {
        $reserve = ReservationModel::find($id);
        $reserve->status = "Cancelled";
        $reserve->save();
        $sendEmail = [
            'message' => "Hello {$reserve->name},\n\n" .
                        "We regret to inform you that your reservation has been canceled. Here are the details:\n\n" .
                        "Date: {$reserve->reservation_date}\n" .
                        "Time: {$reserve->time}\n" .
                        "Number of Persons: {$reserve->persons}\n\n" .
                        "We apologize for any inconvenience caused.",
            'subject' => 'Reservation Cancellation Notification'
        ];
        Mail::to($reserve->email)->send(new ReservationApproved($sendEmail['message'], $sendEmail['subject']));

        return redirect()->back()->with('success', 'Table reservation has been cancelled and email sent.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reserve = ReservationModel::find($id);
        $reserve->delete();
        return redirect()->back()->with('success', 'Table reservation has been deleted!');

    }
}
