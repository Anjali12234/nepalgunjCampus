<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\Course\StoreCourseRequest;
use App\Http\Requests\Course\UpdateCourseRequest;
use App\Models\Course;
use App\Models\Programme;
use App\Models\Semester;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('semester')->paginate(10);
        return view('admin.course.index',compact('courses'));
    }
    public function create()
    {
        $semesters = Semester::all();
        return view('admin.course.create',compact('semesters'));
    }
    
    public function store(StoreCourseRequest $request)
    {
        Course::create($request->validated());
        Alert::success('File added successfully');
        return back();
    }

    public function edit(Course $course)
    {
        $semesters = Semester::all();

        return view('admin.course.edit',compact('semesters','course'));
    }

    public function update(UpdateCourseRequest $request, Course $course)
    {

        $course->update($request->validated());
        Alert::success('File updated successfully');
        return redirect(route('admin.course.create'));
    }

    public function destroy(Course $course)
    {
        $course->delete();
        Alert::success('File deleted successfully');
        return back();
    }
}
