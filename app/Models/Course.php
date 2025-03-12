<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Course extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia,SoftDeletes;

    public function trainers(): belongsToMany
    {
        return $this->belongsToMany(Trainer::class);
    }
    public function trainees(): BelongsToMany
    {
        return $this->belongsToMany(Trainee::class);
    }
    public function getCompletedTraineesCountAttribute()
    {
        return $this->belongsToMany(Trainee::class)->wherePivot('complete',100)->count();
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withTrashed();
    }
    public function Lectures(): HasMany
    {
        return $this->hasMany(Lecture::class);
    }
    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class);
    }
    
    
    public function ratedTrainer()
    {
        return $this->belongsToMany(Trainer::class,'ratings');
    }

    public function ratedLecture()
    {
        return $this->belongsToMany(Lecture::class,'ratings');
    } 

    public function rates()
    {
        return $this->belongsToMany(Rate::class,'ratings');
    }
}
