<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;
    protected $fillable = [
        'region_id',
        'name'
    ];

    public function region(){
        return $this->belongsTo('App\Models\region');
    }
}
