<?php

namespace App\Models\Sliders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{

    use SoftDeletes;

    public $table = 'banner_slider';

    protected $fillable = [
        'title', 'description', 'image_location', 'active'
    ];

    public function getImageAttribute()
    {
        return url($this->image_location);
    }

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }
}
