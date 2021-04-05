<?php

namespace App\Models\Sliders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamBanner extends Model
{
    use SoftDeletes;

    protected $fillable = [
            'image_location',
            'active'
    ];

    public function isActive()
    {
        return $this->active;
    }

    public function scopeActive($query, $active = true)
    {
        return $query->where('active', $active);
    }
}
