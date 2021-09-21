<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    public $table = 'faqs';

    protected $casts = [
        'active' => 'boolean'
    ];

    protected $fillable = ['answer_text', 'question_text', 'active'];

    public function isActive()
    {
        return $this->active;
    }
}
