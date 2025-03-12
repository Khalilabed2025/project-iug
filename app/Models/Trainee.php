<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trainee extends Model implements HasMedia
{
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use HasFactory,InteractsWithMedia,SoftDeletes;
    
    public function trainers()
    {
        return $this->hasManyDeep(Trainer::class, ['course_trainee', Course::class,'course_trainer'])->distinct();
    }
  
    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }
    public function certificates(): HasMany
    {
        return $this->hasMany(Certificate::class);
    } 
    public function lectures()
    {
        return $this->belongsToMany(Lecture::class, 'attendances')
            ->withPivot('status','reason');
    }
    public function activities()
    {
        return $this->belongsToMany(Activity::class, 'activity_trainees')
            ->withPivot('status','marks');
    }
}
