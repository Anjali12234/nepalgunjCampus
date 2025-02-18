<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Gallery;
use App\Models\GeneralQuestion;
use App\Models\Notice;
use App\Models\Programme;
use App\Models\Semester;
use App\Models\Slider;
use App\Models\Teacher;
use App\Models\TeacherRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        session()->flash('showPopup', true);
        $galleries = Gallery::orderBy('position','asc')->limit(6)->get();
        $about = About::latest()->first();
        $sliders = Slider::all();
        $notices = Notice::where('status', 1)->get();
        return view('frontend.index', compact('notices','sliders', 'about', 'galleries'));
    }
    public function aboutUs()
    {
        $teachers = Teacher::with('ratings')->limit(3)->get();
        $about = About::latest()->first();
        return view('frontend.aboutus', compact('about', 'teachers'));
    }
    public function mission()
    {

        return view('frontend.mission');
    }
    public function whyNcmt()
    {

        return view('frontend.whyNcmt');
    }
    public function contact()
    {

        return view('frontend.contact');
    }
    public function teacher(Teacher $teacher)
    {
        $student = Auth::guard('student')->user();
        $averageRating = TeacherRating::where('teacher_id', $teacher->id)->avg('rating');
        $averageTeachingSkillRating = TeacherRating::where('teacher_id', $teacher->id)->avg('teaching_skill');
        $averageCommunicationSkillRating = TeacherRating::where('teacher_id', $teacher->id)->avg('communication_skill');
        $averageSubjectKnowledgeRating = TeacherRating::where('teacher_id', $teacher->id)->avg('subject_knowledge');
        $averageClassPerformanceRating = TeacherRating::where('teacher_id', $teacher->id)->avg('class_performance');
        $averageInteractiveTeachingRating = TeacherRating::where('teacher_id', $teacher->id)->avg('interactive_teaching');
        $totalAverageRating = (
            $averageTeachingSkillRating +
            $averageCommunicationSkillRating +
            $averageSubjectKnowledgeRating +
            $averageClassPerformanceRating +
            $averageInteractiveTeachingRating
        ) / 5;

        $studentRatings = TeacherRating::where('teacher_id', $teacher->id)
            ->where('student_id', $student?->id) // Ensure it's for the authenticated student
            ->first();

        if ($studentRatings) {
            $totalAverageStudentRating = (
                $studentRatings->teaching_skill +
                $studentRatings->communication_skill +
                $studentRatings->subject_knowledge +
                $studentRatings->class_performance +
                $studentRatings->interactive_teaching
            ) / 5;
        } else {
            $totalAverageStudentRating = 0; // Handle case where no ratings exist for the student
        }
        return view('frontend.teacher', compact(
            'teacher',
            'averageRating',
            'averageTeachingSkillRating',
            'averageCommunicationSkillRating',
            'averageSubjectKnowledgeRating',
            'averageClassPerformanceRating',
            'averageInteractiveTeachingRating',
            'totalAverageRating',
            'student',
            'totalAverageStudentRating',
        ));
    }
    public function programme(Programme $programme)
    {
        $programme->load('semesters');
        $generalQuestions = GeneralQuestion::where('type', $programme->id)->get();
        $programmes = Programme::all();

        return view('frontend.programme.programmeList',
            compact('programme', 'programmes', 'generalQuestions')
        );
    }
    public function semester(Semester $semester)
    {
        $semesters = Semester::with('programme')
            ->whereHas('programme', function ($query) use ($semester) {
                $query->where('programme_short_name', $semester->programme->programme_short_name);
            })
            ->get();
        $generalQuestions = GeneralQuestion::where('type', $semester->programme->id)->get();
        $totalCreditHr = $semester->courses->sum('credit_hr');
        $totalLectureHr = $semester->courses->sum('lecture_hr');
        $totalTutorialHr = $semester->courses->sum('tutorial_hr');
        $totalLabHr = $semester->courses->sum('lab_hr');
        $totalHr = $semester->courses->sum('total_hr');
        return view('frontend.programme.semester',
            compact('semester', 'generalQuestions', 'semesters', 'totalCreditHr', 'totalLectureHr', 'totalTutorialHr', 'totalLabHr', 'totalHr')
        );
    }

}
