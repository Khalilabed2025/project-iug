<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Qualification extends Model
{
    use HasFactory;
    public function trainer(): BelongsTo
    {
        return $this->belongsTo(Trainer::class)->withTrashed();
    }
}
