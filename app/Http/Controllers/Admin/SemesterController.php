<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Semester\StoreSemesterRequest;
use App\Http\Requests\Semester\UpdateSemesterRequest;
use App\Models\Programme;
use App\Models\Semester;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SemesterController extends Controller
{
    public function create()
    {
        $programmes = Programme::all();
        $semesters = Semester::paginate(10);
        return view('admin.semester.create',compact('semesters','programmes'));
    }
    
    public function store(StoreSemesterRequest $request)
    {
        Semester::create($request->validated());
        Alert::success('File added successfully');
        return back();
    }

    public function edit(Semester $semester)
    {
        $programmes = Programme::all();

        return view('admin.semester.edit',compact('semester','programmes'));
    }

    public function update(UpdateSemesterRequest $request, Semester $semester)
    {

        $semester->update($request->validated());
        Alert::success('File updated successfully');
        return redirect(route('admin.semester.create'));
    }

    public function destroy(Semester $semester)
    {
        $semester->delete();
        Alert::success('File deleted successfully');
        return back();
    }
}
