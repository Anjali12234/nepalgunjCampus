<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Programme\StoreProgrammeRequest;
use App\Http\Requests\Programme\UpdateProgrammeRequest;
use App\Models\Programme;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProgrammeController extends Controller
{
    public function create()
    {
        $programmes = Programme::paginate(10);
        return view('admin.programme.create',compact('programmes'));
    }
    
    public function store(StoreProgrammeRequest $request)
    {
        Programme::create($request->validated());
        Alert::success('File added successfully');
        return back();
    }

    public function edit(Programme $programme)
    {
        return view('admin.programme.edit',compact('programme'));
    }

    public function update(UpdateProgrammeRequest $request, Programme $programme)
    {

        $programme->update($request->validated());
        Alert::success('File updated successfully');
        return redirect(route('admin.programme.create'));
    }

    public function destroy(Programme $programme)
    {
        $programme->delete();
        Alert::success('File deleted successfully');
        return back();
    }
}
