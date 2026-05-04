<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'class_course_id',
        'schedule',
    ];

    public function classCourse()
    {
        return $this->belongsTo(ClassCourse::class);
    }
}