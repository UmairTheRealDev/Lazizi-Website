<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiefModel extends Model
{
    use HasFactory;
    protected $fillable = ['chief_name', 'nationality', 'speciality', 'experience','chief_picture'];



}
