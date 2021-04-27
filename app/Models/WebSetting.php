<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebSetting extends Model
{
    protected $fillable = [
        'value'
    ];

    public function scopeWhatsapp($query, $config = 'whatsapp url')
    {
        return $query->where('config', $config);
    }

    public function scopeConfig($query, $config)
    {
        if (!$config) {
            return 'NULL';
        }
        return $query->where('config', $config);
    }
}
