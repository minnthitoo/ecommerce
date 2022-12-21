<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderManagement extends Model
{
    use HasFactory;
    protected $fillable = [
      'user_id',
      'order_code',
      'total',
      'address',
      'status'
    ];

    public function index(){

    }
}
