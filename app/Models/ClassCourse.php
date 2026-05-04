<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'title',
        'description',
        'cost',
        'schedule',
        'prerequisite',
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}