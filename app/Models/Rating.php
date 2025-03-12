<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rating extends Model
{
    use HasFactory,SoftDeletes;
    public function course()
    {
        return $this->belongsTo(Course::class)->withTrashed();
    } 
    public function trainer()
    {
        return $this->belongsTo(Trainer::class)->withTrashed();
    }
    public function rate()
    {
        return $this->belongsTo(Rate::class)->withTrashed();
    }
    public function lecture()
    {
        return $this->belongsTo(Lecture::class)->withTrashed();
    }
}
