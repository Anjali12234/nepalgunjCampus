<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentDetail extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'student_id',
        'faculty_name',
        'phone_number',
        'address',
        'registration_no',
        'facebook_url',
        'instagram_url',
        'description',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
