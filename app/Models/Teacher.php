<?php

namespace App\Models;

use App\DepartmentEnum;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Teacher extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = [
        'teacher_name',
        'faculty_name',
        'status',
        'slug',
        'image',
        'email',
        'phone_number',
        'address',
        'department',
        'post',
        'experience',
        'qualification',
        'facebook_url',
        'instagram_url',
        'description',
        'position',
    ];
    protected $casts = [
        'department' => DepartmentEnum::class,
    ];
    

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('teachers', 'public') : null,
        );
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'teacher_name'
            ]
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($teacher) {
            $teacher->position = static::max('position') + 1;
        });
    }

    public function ratings()
    {
        return $this->hasOne(TeacherRating::class);
    }
}
