<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use Illuminate\Support\Facades\Cache;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ImageGalleryController extends Controller
{
    public function galleries()
    {
        $animals = Animal::with('mediaItems')->get();

        return view('galleries', compact('animals'));
    }

    public function gallery(int $id)
    {
        $animal = Animal::with('mediaItems')->find($id);

        $breadcrumbs = self::getBreadcrumbs('Gazdikeresők/' . $animal->name);

        return view('gallery', [
            'name' => $animal->name,
            'animal' => $animal,
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    function cachedDropboxUrl(Media $media): string
    {
        $cacheKey = 'dropbox_media_url_' . $media->id;

        return Cache::remember($cacheKey, now()->addMinutes(50), function () use ($media) {
            return $media->getTemporaryUrl(now()->addHour());
        });
    }

    public function upload()
    {
        $animals = Animal::all();

        return view('upload', compact('animals'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:2048',
            'animal_id' => 'nullable|string'
        ]);

        if ($request->animal_id) {
            $animal = Animal::find($request->animal_id);
        } else {
            $animal = Animal::create([
                'name' => 'Kajla Amber',
                'description' => 'Leírás'
            ]);
        }

        $media = $animal->addMediaFromRequest('file')->toMediaCollection();

        /* $animal->mediaItems()->syncWithoutDetaching([
            $media->id => ['position' => 'thumbnail']
        ]); */

        return back()->with('success', 'Fájl feltöltve');
    }

    public static function getBreadcrumbs(string $path): array
    {
        $path = trim($path, '/');

        if ($path === '') {
            return [];
        }

        $parts = explode('/', $path);
        $breadcrumbs = [];
        $current = '';

        foreach ($parts as $part) {
            $current .= '/' . $part;
            $breadcrumbs[] = [
                'label' => ucfirst($part),
                'path'  => ltrim($current, '/'),
            ];
        }

        return $breadcrumbs;
    }
}
