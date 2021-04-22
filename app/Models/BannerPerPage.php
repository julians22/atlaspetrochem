<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannerPerPage extends Model
{
    public $table = 'banner_per_pages';

    protected $fillable = [
        'key',
        'image_location_desktop',
        'image_location_mobile'
    ];

    public function scopeKey($query, $key = '')
    {
        return $query->where('key', $key);
    }
}
