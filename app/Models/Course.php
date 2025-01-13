<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Course extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = [
        'course_title',
        'course_code',
        'course_pdf',
        'credit_hr',
        'lecture_hr',
        'tutorial_hr',
        'lab_hr',
        'total_hr',
        'semester_id',
        'slug',
        'position',
    ];

    protected function coursePdf(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('courses', 'public') : null,
        );
    }
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
