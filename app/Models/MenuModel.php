<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuModel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'itemname',
        'price',
        'detail',
        'category_id',
        'picture',
    ];
    protected $primaryKey = "item_id";
    
    // public function category()
    // {
    //     return $this->belongsTo(MenuModel::class);
    // }
}
