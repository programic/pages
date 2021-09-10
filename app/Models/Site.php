<?php

namespace App\Models;

use App\Casts\PageContentCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'active',
        'slug',
        'template_name',
        'favicon',
        'fb_pixel',
        'google_tag_manager',
        'seo',
        'content',
    ];

    protected $casts = [
        'seo' => 'array',
        'content' => 'array',
    ];

    public function getContent()
    {
        $cast = new PageContentCast();

        return $cast->get($this, 'content', $this->content, $this->attributes);
    }


}
