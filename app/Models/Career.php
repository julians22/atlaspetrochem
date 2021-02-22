<?php

namespace App\Models;

use App\ApplicationJob;
use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Career extends Model
{
    use Uuid;

    protected $fillable = [
        'position', 'job_desk', 'requirements', 'active'
    ];


    /**
     * @param $query
     * @param bool $status
     *
     * @return mixed
     */
    public function scopeActive($query, $status = true)
    {
        return $query->where('active', $status);
    }

    /**
     * Get all of the applications for the Career
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function applications(): HasMany
    {
        return $this->hasMany(ApplicationJob::class);
    }
}
