<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class EnrollmentForm extends Model
{
     use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'address',
        'college_name',
        'faculty',
        'phone_no',
        'email',
        'photo_of_id_card',
        'photo_of_post_shared',
        'message',
        'status',
       
    ];

     protected function photoOfIdCard(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('enrollmentForm', 'public') : null,
        );
    }
     protected function photoOfPostShared(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('enrollmentForm', 'public') : null,
        );
    }
}
