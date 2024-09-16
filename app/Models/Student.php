<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = "LRN";

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class)->with(['gradeLevel', 'teacher']);
    }  
}
