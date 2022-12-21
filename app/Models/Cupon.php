<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'cupon_code',
        'type',
        'shop_id',
        'description',
        'start_date',
        'end_date',
        'amount',
        "status"
    ];

    public function Shop(){
        return $this->belongsTo('App\Models\Shop');
    }
}
