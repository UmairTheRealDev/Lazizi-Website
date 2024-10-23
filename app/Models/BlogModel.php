<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'topic',
        'content',
        'author_name',
        'featured_image',
        'description_image',
        'tags',
    ];
}
