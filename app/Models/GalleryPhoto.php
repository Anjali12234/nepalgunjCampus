<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class GalleryPhoto extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'gallery_id',
        'imge',
        'title',
        'slug',
        'position',
    ];

    
  
    public function files()
    {
        return $this->morphMany(File::class, 'model');
    }
   

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
    
}
