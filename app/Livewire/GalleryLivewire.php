<?php

namespace App\Livewire;

use App\Models\Gallery;
use App\Models\GalleryPhoto;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class GalleryLivewire extends Component
{
    use WithFileUploads;

    public $galleryId;
    public $title;
    public $galleryPhotos = [];

    public function mount($galleryId = null)
    {

        if ($galleryId) {
            $this->galleryId = $galleryId;
            $this->loadGallery();
        } else {
            $this->galleryPhotos = [['title' => '']]; // Initialize with one empty feature
            $this->galleryPhotos = [['image' => '']]; // Initialize with one empty feature
        }
    }

    public function loadGallery()
    {
        $gallery = Gallery::with('galleryPhotos')->findOrFail($this->galleryId);

        $this->title = $gallery->title;
       
        
        $this->galleryPhotos = $gallery->galleryPhotos->map(function ($galleryPhoto) {
            return [
                'title' => $galleryPhoto->title,
                'image' => $galleryPhoto->image,
            ];
        })
        ->toArray();
    }

    public function save()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'galleryPhotos.*.title' => 'nullable|string|max:255',
            'galleryPhotos.*.image' => 'nullable',
        ]);
    
        // Handle file uploads
        
        // Find the gallery or create a new one
        $gallery = gallery::updateOrCreate(
            ['id' => $this->galleryId],
            [
                'title' => $this->title,
            ]
        );
    
        $gallery->galleryPhotos()->delete(); // Remove existing steps
        foreach ($this->galleryPhotos as $galleryPhoto) {
                       
            $gallery->galleryPhotos()->updateOrCreate($galleryPhoto);
        }
    
        session()->flash('message', $this->galleryId ? 'gallery updated successfully!' : 'gallery created successfully!');
        return redirect()->route('admin.gallery.create'); // Redirect after saving

    }
    

    public function addGalleryPhoto()
    {
        $this->galleryPhotos[] = [
            'title' => '',
            'image' => null,
        ];
    }

    public function removeGalleryPhoto($index)
    {
        unset($this->galleryPhotos[$index]); // Remove the feature at the given index
        $this->galleryPhotos = array_values($this->galleryPhotos); // Reindex the array to prevent issues
    }
    public function render()
    {
        return view('livewire.gallery-livewire');
    }
}
