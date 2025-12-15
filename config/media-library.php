<?php

return [

    'default_filesystem_disk' => env('MEDIA_DISK', 'dropbox'),

    'path_generator' => Spatie\MediaLibrary\Support\PathGenerator\DefaultPathGenerator::class,

    'file_name_generator' => Spatie\MediaLibrary\FileNameGenerator\DefaultFileNameGenerator::class,

    'max_number_of_files_to_delete_per_batch' => 1000,

    'media_model' => Spatie\MediaLibrary\MediaCollections\Models\Media::class,

    'conversion_disk' => null,

    'collections' => [
        'attachments' => [
            'single_file' => false,
        ],
    ],

];
