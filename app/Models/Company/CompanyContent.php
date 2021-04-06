<?php

namespace App\Models\Company;

use Illuminate\Database\Eloquent\Model;

class CompanyContent extends Model
{
    protected $fillable = [
        'key', 'type', 'value'
    ];

    public function scopeKey($query, $key = 'text')
    {
        return $query->where('key', $key);
    }
}
