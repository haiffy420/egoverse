<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReqDetailHosting extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'request_submission_id',
        'storage',
        'purpose',
        'document',
        'add_inform',
    ];

    public function requestSubmission()
    {
        return $this->belongsTo(RequestSubmission::class, 'request_submission_id');
    }
}
