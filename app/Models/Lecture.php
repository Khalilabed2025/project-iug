<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lecture extends Model
{
    use HasFactory,SoftDeletes;
    public function ratedCourses()
    {
        return $this->belongsToMany(Course::class,'ratings');
    }  
    public function course()
    {
        return $this->belongsTo(Course::class)->withTrashed();
    }
    public function trainer()
    {
        return $this->belongsTo(Trainer::class)->withTrashed();
    }
    public function trainees()
    {
        return $this->belongsToMany(Trainee::class, 'attendances')
            ->withPivot('status','reason');
    }
}
