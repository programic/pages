<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'active',
        'slug',
        'template_name',
        'favicon',
        'fb_pixel',
        'google_tag_manager',
        'seo',
        'content',
    ];


}
