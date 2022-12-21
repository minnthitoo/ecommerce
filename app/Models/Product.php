<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'product_code',
        'category_id',
        'subcategory_id',
        'feature_image',
        'images',
        'original_price',
        'price',
        'description',
        'shop_id',
        'color',
        'size',
        'recommanded',
        'best_selling',
        'qty'
    ];

    public function Industry(){
        return $this->belongsTo('App\Model\Industry');
    }

    public function Category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function SubCategory(){
        return $this->belongsTo('App\Models\SubCategory');
    }

    public function Shop(){
        return $this->belongsTo('App\Models\Shop');
    }

}
