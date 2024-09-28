<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;
use Laravel\Scout\Attributes\SearchUsingPrefix;

class Student extends Model
{
    use HasFactory, Searchable;

    protected $primaryKey = "LRN";

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class)->with(['gradeLevel', 'teacher']);
    }  

    public function toSearchableArray(): array
    {
        return [
            'first_name' => $this->first_name
        ];
    }
}
