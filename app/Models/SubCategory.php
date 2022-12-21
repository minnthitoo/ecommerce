<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'title',
        'industry_id',
        'category_id'
    ];
    use HasFactory;

    public function Category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function Industry(){
        return $this->belongsTo('App\Models\Industry');
    }
}
