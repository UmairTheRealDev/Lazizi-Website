<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'cat_name',
    ];
    protected $primaryKey = "cat_id";

    // public function menus()
    // {
    //     return $this->hasMany(CategoryModel::class);
    // }
}
