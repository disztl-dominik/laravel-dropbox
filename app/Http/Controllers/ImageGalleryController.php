<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class ImageGalleryController extends Controller
{
    public function galleries()
    {
        $pets = Pet::with('media')->get();

        return view('galleries', compact('pets'));
    }

    public function gallery(int $id)
    {
        $pets = Pet::find($id);

        return view('gallery', [
            'name' => $pets->name,
            'pet' => $pets
        ]);
    }

    public function upload()
    {
        $pets = Pet::all();

        return view('upload', compact('pets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:2048',
            'animal_id' => 'nullable|string'
        ]);

        if ($request->animal_id) {
            $pet = Pet::find($request->animal_id);
        } else {
            $pet = Pet::create([
                'name' => 'Cica',
                'description' => 'Leírás'
            ]);
        }

        $pet->addMediaFromRequest('file')->toMediaCollection('attachments');

        return back()->with('success', 'Fájl feltöltve');
    }
}
