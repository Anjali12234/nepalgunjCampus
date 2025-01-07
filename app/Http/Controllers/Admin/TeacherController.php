<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Teacher\StoreTeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::latest()->paginate(10);
        return view ('admin.teacher.index',compact('teachers'));
    }

    public function create()
    {
        return view('admin.teacher.create');
    }

     public function store(StoreTeacherRequest $request)
    {
        Teacher::create($request->validated());
        Alert::success('Teacher added successfully');
        return back();
    }
}
