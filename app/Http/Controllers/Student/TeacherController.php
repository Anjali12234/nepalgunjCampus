<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\TeacherRating;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::latest()->paginate(10);
        return view('student.teacher.index', compact('teachers'));
    }

    public function show(Teacher $teacher)
    {
        $rating = TeacherRating::where('teacher_id', $teacher->id)
            ->where('student_id', auth('student')->id())
            ->value('rating');
        $teacherSkillRating = TeacherRating::where('teacher_id', $teacher->id)
            ->where('student_id', auth('student')->id())
            ->value('teaching_skill');
        $communicationSkillRating = TeacherRating::where('teacher_id', $teacher->id)
            ->where('student_id', auth('student')->id())
            ->value('communication_skill');
        $subjectKnowledgeRating = TeacherRating::where('teacher_id', $teacher->id)
            ->where('student_id', auth('student')->id())
            ->value('subject_knowledge');
        $classPerformaceRating = TeacherRating::where('teacher_id', $teacher->id)
            ->where('student_id', auth('student')->id())
            ->value('class_performance');
        $interactiveTeachingRating = TeacherRating::where('teacher_id', $teacher->id)
            ->where('student_id', auth('student')->id())
            ->value('interactive_teaching');

        return view('student.teacher.show', compact(
            'teacher',
             'rating',
             'teacherSkillRating',
             'communicationSkillRating',
             'subjectKnowledgeRating',
             'classPerformaceRating',
             'interactiveTeachingRating',
            ));
    }

    public function rateTeacher(Request $request, $teacherId)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $studentId = auth('student')->id(); // Use the student guard

        $rating = TeacherRating::updateOrCreate(
            [
                'teacher_id' => $teacherId,
                'student_id' => $studentId,
            ],
            [
                'rating' => $request->rating,
            ]
        );

        return redirect()->back()->with('success', 'Rating submitted successfully!');
    }
    public function rateTeachingSkill(Request $request, $teacherId)
    {
        $request->validate([
            'teaching_skill' => 'required|integer|min:1|max:5',
        ]);

        $studentId = auth('student')->id(); // Use the student guard

        $rating = TeacherRating::updateOrCreate(
            [
                'teacher_id' => $teacherId,
                'student_id' => $studentId,
            ],
            [
                'teaching_skill' => $request->teaching_skill,
            ]
        );

        return redirect()->back()->with('success', 'Rating submitted successfully!');
    }
    public function rateCommunicationSkill(Request $request, $teacherId)
    {
        $request->validate([
            'communication_skill' => 'required|integer|min:1|max:5',
        ]);

        $studentId = auth('student')->id(); // Use the student guard

        $rating = TeacherRating::updateOrCreate(
            [
                'teacher_id' => $teacherId,
                'student_id' => $studentId,
            ],
            [
                'communication_skill' => $request->communication_skill,
            ]
        );

        return redirect()->back()->with('success', 'Rating submitted successfully!');
    }
    public function rateSubjectKnowledge(Request $request, $teacherId)
    {
        $request->validate([
            'subject_knowledge' => 'required|integer|min:1|max:5',
        ]);

        $studentId = auth('student')->id(); // Use the student guard

        $rating = TeacherRating::updateOrCreate(
            [
                'teacher_id' => $teacherId,
                'student_id' => $studentId,
            ],
            [
                'subject_knowledge' => $request->subject_knowledge,
            ]
        );

        return redirect()->back()->with('success', 'Rating submitted successfully!');
    }
    public function rateClassPerformance(Request $request, $teacherId)
    {
        $request->validate([
            'class_performance' => 'required|integer|min:1|max:5',
        ]);

        $studentId = auth('student')->id(); // Use the student guard

        $rating = TeacherRating::updateOrCreate(
            [
                'teacher_id' => $teacherId,
                'student_id' => $studentId,
            ],
            [
                'class_performance' => $request->class_performance,
            ]
        );

        return redirect()->back()->with('success', 'Rating submitted successfully!');
    }
    public function rateInteractiveTeaching(Request $request, $teacherId)
    {
        $request->validate([
            'interactive_teaching' => 'required|integer|min:1|max:5',
        ]);

        $studentId = auth('student')->id(); // Use the student guard

        $rating = TeacherRating::updateOrCreate(
            [
                'teacher_id' => $teacherId,
                'student_id' => $studentId,
            ],
            [
                'interactive_teaching' => $request->interactive_teaching,
            ]
        );

        return redirect()->back()->with('success', 'Rating submitted successfully!');
    }
}
