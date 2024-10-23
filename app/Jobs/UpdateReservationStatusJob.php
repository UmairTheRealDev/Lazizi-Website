<?php

namespace App\Jobs;

use App\Models\ReservationModel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UpdateReservationStatusJob implements ShouldQueue
{
    use Queueable;
    protected $reservation;
    /**
     * Create a new job instance.
     */
    public function __construct(ReservationModel $reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        if($this->reservation->status === "reserved")
        {
        $this->reservation->status = 'Not Responded';
        $this->reservation->save();
        }
    }
}
