<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Semester extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = [
        'title',
        'programme_id',
        'slug',
        'position',
    ];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($semester) {
            $semester->position = static::max('position') + 1;
        });
    }

    
    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
