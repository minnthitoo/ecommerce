<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class becomeMerchant extends Model
{
    use HasFactory;
    protected $fillable = [
        'shop_name',
        'contact_person',
        'email',
        'phone',
        'address',
        "industry_type",
    ];
}
