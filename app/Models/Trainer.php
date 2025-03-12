<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;



class Trainer extends Model implements HasMedia
{
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use HasFactory,InteractsWithMedia, SoftDeletes;
    
    public function trainees()
    {
        return $this->hasManyDeep(Trainee::class, ['course_trainer', Course::class,'course_trainee'])->distinct();
    }
    public function courses(): belongsToMany
    {
        return $this->belongsToMany(Course::class);
    } 
    public function qualifications(): HasMany
    {
        return $this->hasMany(Qualification::class);
    }
    public function ratedCourses()
    {
        return $this->belongsToMany(Course::class,'ratings');
    }
}
