<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'rating',
        'project_id',
        'submitted_by',
    ];

    /**
     * Get the user who submitted the feedback.
     */
    public function submittedBy()
    {
        return $this->belongsTo(User::class, 'submitted_by');
    }

    /**
     * Get the project associated with the feedback.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function scopeForUser($query, $userId)
    {
        return $query->where('submitted_by', $userId);
    }
}

