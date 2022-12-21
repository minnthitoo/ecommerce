<?php

namespace App\Models;

use App\Models\Industry;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'industry_id',
    ];
    use HasFactory;

    public function Industry(){
        return $this->belongsTo('App\Models\Industry');
    }
}
