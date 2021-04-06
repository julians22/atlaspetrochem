<?php

namespace App\Models\About;

use Illuminate\Database\Eloquent\Model;

class AboutContent extends Model
{
    protected $fillable = [
        'title', 'thumb_location', 'content', 'thumb_text', 'featured_image_location'
    ];
}
