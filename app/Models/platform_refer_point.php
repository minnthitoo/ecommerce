<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class platform_refer_point extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'points',
        'max_points',
    ];
}
