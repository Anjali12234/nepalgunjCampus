<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'teacher_id',
        'rating',
        'student_id',
        'teaching_skill',
        'communication_skill',
        'subject_knowledge',
        'class_performance',
        'interactive_teaching'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
