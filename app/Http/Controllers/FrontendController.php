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

class FrontendController extends Controller
{
    public function index()
    {
        session()->flash('showPopup', true);
        $galleries = Gallery::latest()->limit(6)->get();
        $about = About::latest()->first();
        $sliders = Slider::all();
        $notices = Notice::where('status',1)->get();
        return view('frontend.index', compact('notices','sliders', 'about', 'galleries'));
    }
    public function aboutUs()
    {
        $about = About::latest()->first();
        return view('frontend.aboutus', compact('about'));
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
    public function teacher($slug)
    {
        $teacher = Teacher::where('slug', $slug)->with('teacherRating')->firstOrFail();
        $averageRating = (int) TeacherRating::avg('rating');

        return view('frontend.teacher', compact('teacher','averageRating'));
    }
    public function programme(Programme $programme)
    {
        $programme->load('semesters');
        $generalQuestions = GeneralQuestion::where('type', 'programme')->get();
        $programmes = Programme::all();

        return view(
            'frontend.programme.programmeList',
            compact('programme', 'programmes', 'generalQuestions')
        );
    }
    public function semester(Semester $semester)
    {
        $semesters = Semester::all();
        $generalQuestions = GeneralQuestion::where('type', 'programme')->get();

        return view(
            'frontend.programme.semester',
            compact('semester', 'generalQuestions', 'semesters')
        ); 
    }

    public function rateTeacher(Request $request)
    {
        $validated = $request->validate([
            'teacher_id' => 'required|exists:teachers,id',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        TeacherRating::updateOrCreate(
            ['teacher_id' => $validated['teacher_id']],
            ['rating' => $validated['rating']]
        );
        return response()->json(['message' => 'Rating submitted successfully.']);
    }
}
