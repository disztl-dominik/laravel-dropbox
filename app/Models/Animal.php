<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Animal extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['name', 'description'];

    public function mediaItems()
    {
        return $this->belongsToMany(Media::class, 'animal_media')
                    ->withPivot('position')
                    ->withTimestamps();
    }

    public function thumbnail()
    {
        return $this->mediaItems()->wherePivot('position', 'thumbnail')->first();
    }

    public function banner()
    {
        return $this->mediaItems()->wherePivot('position', 'banner')->first();
    }

    public function miniGallery()
    {
        return $this->mediaItems()->wherePivot('position', 'mini-gallery')->get();
    }
}
