<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class)->withTrashed();
    }
    public function trainees()
    {
        return $this->belongsToMany(Trainee::class, 'activity_trainees')
            ->withPivot('status','marks');
    }
}
