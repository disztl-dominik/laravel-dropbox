<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Services\CertificateService;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    protected $certificateService;

    public function __construct(CertificateService $certificateService)
    {
        $this->certificateService = $certificateService;
    }

    public function certificate()
    {
        $animals = Animal::all();

        return view('certificate', compact('animals'));
    }

    public function generate(Request $request)
    {
        $request->validate([
            'animal_id' => 'nullable|string'
        ]);

        if ($request->animal_id) {
            $animal = Animal::find($request->animal_id);
        } else {
            die();
        }

        $url = $this->certificateService->generate($animal);

        return response()->json([
            'success' => true,
            'certificate_url' => $url
        ]);
    }

    public function show(Animal $animal)
    {
        $path = storage_path("app/public/certificates/certificate_{$animal->id}.jpg");

        return response()->file($path, [
            'Content-Type' => 'image/jpeg',
            'Content-Disposition' => 'inline; filename="certificate_'.$animal->id.'.jpg"',
        ]);
    }
}
