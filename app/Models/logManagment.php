<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logManagment extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
        'action',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
