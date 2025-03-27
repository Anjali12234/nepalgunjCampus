<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GallerPhoto\StoreGalleryPhotoRequest;
use App\Http\Requests\GallerPhoto\UpdateGalleryPhotoRequest;
use App\Models\Gallery;
use App\Models\GalleryPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryPhotoController extends Controller
{
    public function create()
    {
        $galleryPhotos = GalleryPhoto::paginate(10);
        $galleries = Gallery::all();
        return view('admin.galleryPhoto.create', compact('galleryPhotos','galleries'));
    }
    
    public function store(StoreGalleryPhotoRequest $request)
    {
        
        DB::transaction(function () use ($request) {
            $gallery = GalleryPhoto::create($request->validated());
            foreach ($request->validated(['files']) as $file) {
                $gallery->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('gallerys/' . Str::slug($request->input('title'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        });
        Alert::success('File added successfully');
        return back();
    }

    public function edit(GalleryPhoto $galleryPhoto)
    {
        $galleries = Gallery::all();
        $galleryPhoto->load('files');
        return view('admin.galleryPhoto.edit',compact('galleryPhoto','galleries'));
    }

    public function update(UpdateGalleryPhotoRequest $request, GalleryPhoto $galleryPhoto)
    {
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $galleryPhoto->files()->create([
                    'file_name' => $file->getClientOriginalName(),
                    'file' => $file->store('gallerys/' . Str::slug($request->input('title'), '_'), 'public'),
                    'size' => $file->getSize(),
                    'extension' => $file->getClientOriginalExtension()
                ]);
            }
        }
        $galleryPhoto->update($request->validated());
        Alert::success('File updated successfully');
        return redirect(route('admin.galleryPhoto.create'));
    }

    public function destroy(GalleryPhoto $galleryPhoto)
    {
        $galleryPhoto->delete();
        Alert::success('File deleted successfully');
        return back();
    }
}
