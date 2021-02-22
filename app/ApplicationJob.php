<?php

namespace App;

use App\Models\Career;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ApplicationJob extends Model
{
    public $table = 'application_jobs';

    protected $fillable = ['name', 'gender', 'career_id', 'email', 'message', 'phone', 'resume_location'];

    /**
     * Get the career associated with the ApplicationJob
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function career(): HasOne
    {
        return $this->hasOne(Career::class, 'career_id');
    }
}
