<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Gallery;
use App\Models\GeneralQuestion;
use App\Models\Programme;
use App\Models\Semester;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->limit(6)->get();
        $about = About::latest()->first();
        $sliders = Slider::all();
        return view('frontend.index', compact('sliders', 'about', 'galleries'));
    }
    public function aboutUs()
    {
        $about = About::latest()->first();
        return view('frontend.aboutus', compact('about')); // Ensure the Blade file 'aboutus.blade.php' exists in the views directory
    }
    public function mission()
    {

        return view('frontend.mission'); // Ensure the Blade file 'aboutus.blade.php' exists in the views directory
    }
    public function whyNcmt()
    {

        return view('frontend.whyNcmt'); // Ensure the Blade file 'aboutus.blade.php' exists in the views directory
    }
    public function contact()
    {

        return view('frontend.contact'); // Ensure the Blade file 'aboutus.blade.php' exists in the views directory
    }
    public function programme(Programme $programme)
    {
       $programme->load('semesters');
        $generalQuestions = GeneralQuestion::where('type', 'programme')->get();
        $programmes = Programme::all();
        
        return view('frontend.programme.programmeList', 
        compact('programme', 'programmes', 'generalQuestions')); // Ensure the Blade file 'aboutus.blade.php' exists in the views directory
    }
    public function semester(Semester $semester)
    {
        $semesters = Semester::all();
        $generalQuestions = GeneralQuestion::where('type', 'programme')->get();
      
        return view('frontend.programme.semester', 
        compact('semester', 'generalQuestions','semesters')); // Ensure the Blade file 'aboutus.blade.php' exists in the views directory
    }
}
