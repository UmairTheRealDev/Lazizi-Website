<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationModel extends Model
{
    use HasFactory;
    protected $fillable = [
    'name',
    'phone',
     'persons',
     'reservation_date',
     'time',
     'email',
     'reserved_person_id',
     'reserved_by',
     'status'
    ];

}
