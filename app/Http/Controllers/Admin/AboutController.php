<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\About;
use App\Http\Requests\About\StoreAboutRequest;
use App\Http\Requests\About\UpdateAboutRequest;
use RealRashid\SweetAlert\Facades\Alert;

class AboutController extends Controller
{
    public function create()
    {
        $abouts = About::paginate(10);
        return view('admin.about.create',compact('abouts'));
    }
    
    public function store(StoreAboutRequest $request)
    {
        About::create($request->validated());
        Alert::success('About added successfully');
        return back();
    }

    public function edit(About $about)
    {
        return view('admin.about.edit',compact('about'));
    }

    public function update(UpdateAboutRequest $request, about $about)
    {
        if ($request->hasFile('image') && $about->image) {
            $this->deleteFile($about->image);
        } 
        $about->update($request->validated());
        Alert::success('about updated successfully');
        return redirect(route('admin.about.create'));
    }

    public function destroy(About $about)
    {
        $about->delete();
        Alert::success('about deleted successfully');
        return back();
    }
}
