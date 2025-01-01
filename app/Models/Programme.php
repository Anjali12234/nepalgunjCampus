<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Programme extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = [
        'programme_short_name',
        'programme_full_name',
        'university',
        'years',
        'slug',
        'position',
    ];

  
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'programme_short_name'
            ]
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($programme) {
            $programme->position = static::max('position') + 1;
        });
    }
    public function semesters()
    {
        return $this->hasMany(Semester::class);
    }
}
