<?php

namespace App\Media;

use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Models\Animal;

class ModelPathGenerator implements PathGenerator
{
    public function getPath(Media $media): string
    {
        if ($media->model_type !== Animal::class) {
            return '';
        }

        $pet = $media->model;

        return sprintf(
            'Gazdikeresők/%s/',
            $pet->name
        );
    }

    public function getPathForConversions(Media $media): string
    {
        return $this->getPath($media) . 'conversions/';
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPath($media) . 'responsive/';
    }
}
