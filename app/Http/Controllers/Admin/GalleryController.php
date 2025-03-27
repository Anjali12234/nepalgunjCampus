<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Gallery\StoreGalleryRequest;
use App\Http\Requests\Gallery\UpdateGalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    public function create()
    {
        $galleries = Gallery::paginate(10);
        return view('admin.gallery.create', compact('galleries'));
    }
    
    public function store(StoreGalleryRequest $request, Gallery $gallery)
    {
        Gallery::create($request->validated());

        Alert::success('File added successfully');
        return back();
    }

    public function edit(Gallery $gallery)
    {
        $gallery->load('files');
        return view('admin.gallery.edit',compact('gallery'));
    }

    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        if ($request->hasFile('image') && $gallery->image) {
            $this->deleteFile($gallery->image);
        }
            $gallery->update($request->validated());
        Alert::success('File updated successfully');
        return redirect(route('admin.gallery.create'));
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        Alert::success('File deleted successfully');
        return back();
    }
}
