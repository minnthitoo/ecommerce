<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siteInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'tab_logo',
        'site_name',
        'hot_line',
        'site_email',
        'site_email',
        'site_facebook',
        'site_youtube',
        'site_ig',
        'site_tiktop',
        'opening_closing'
    ];
}
