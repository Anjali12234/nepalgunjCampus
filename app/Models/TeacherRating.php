<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherRating extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'teacher_id', 'rating'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
