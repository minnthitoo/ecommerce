<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class white_list extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'product_id',
    ];
}
