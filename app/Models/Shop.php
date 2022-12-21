<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'email',
        'industry_type',
        'region_id',
        'address',
        'status',
        'latitude',
        'longitude',
        'photo',
        'messager_link',
        'telegram_link',
        'facebook_link',
        'viber_link',
        'hotlline',
        'hour',
        'address',
    ];

}
