<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bannerAds extends Model
{
    use HasFactory;
    protected $fillable = [
        "text",
        "sort",
        "link",
        "image"
    ];
}
