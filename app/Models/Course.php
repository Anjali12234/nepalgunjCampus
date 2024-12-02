<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'course_title',
        'course_code',
        'course_pdf',
        'credit_hr',
        'lecture_hr',
        'tution_hr',
        'lab_hr',
        'semester_id',
        'slug',
        'position',
    ];

  
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'course_title'
            ]
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($course) {
            $course->position = static::max('position') + 1;
        });
    }

    
    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }
}
