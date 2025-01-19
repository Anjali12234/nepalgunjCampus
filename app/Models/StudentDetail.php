<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class StudentDetail extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'student_id',
        'faculty_name',
        'phone_number',
        'address',
        'image',
        'registration_no',
        'facebook_url',
        'instagram_url',
        'description',
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('student', 'public') : null,
        );
    }
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
