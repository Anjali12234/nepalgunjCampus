<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'image',
        'slug',
        'position',
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('sliders', 'public') : null,
        );
    }
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

        static::creating(function ($product) {
            $product->position = static::max('position') + 1;
        });
    }

}
