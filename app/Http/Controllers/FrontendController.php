<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Gallery;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->limit(6)->get();
        $about = About::latest()->first();
        $sliders = Slider::all();
        return view('frontend.index', compact('sliders','about','galleries'));
    }
    public function aboutus()
    {
        return view('frontend.aboutus');
    }
}
