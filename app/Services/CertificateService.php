<?php

namespace App\Services;

use App\Models\Animal;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CertificateService
{
    public function generate(Animal $animal): void
    {
        $name = 'Gipsz Jakab';
        $animalName = $animal->name;
        $from = '2026.02.15';
        $to = '2026.02.16';

        $manager = new ImageManager(new Driver());

        $image = $manager->read(
            storage_path('app/public/images/certificate_template.png')
        );

        $image->text($name, 1300, 410, function($font) {
            $font->file(public_path('fonts/Baloo2-Regular.ttf'));
            $font->size(71);
            $font->color('#0779b5');
            $font->align('center');
        });

        $image->text($from . ' - ' . $to, 1300, 550, function($font) {
            $font->file(public_path('fonts/fredoka-latin-500-normal.ttf'));
            $font->size(60);
            $font->color('#475569');
            $font->align('center');
        });

        $image->text($animalName . '-t!', 1300, 730, function($font) {
            $font->file(public_path('fonts/fredoka-latin-700-normal.ttf'));
            $font->size(80);
            $font->color('#1e3a8a');
            $font->align('center');
        });

        $fileName = 'certificate_' . $animal->id . '.jpg';
        $path = storage_path("app/public/certificates/{$fileName}");
        $image->save($path);
    }
}
