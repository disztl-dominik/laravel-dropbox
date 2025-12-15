<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Galéria</title>
        <style>
            body {
                margin: 0;
            }
            h1, h2 {
                padding: 20px;
            }
            .gallery {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                padding: 30px;
            }
            .gallery img {
                max-width: 200px;
                max-height: 200px;
                object-fit: cover;
                padding: 5px;
            }
            a {
                text-decoration: none;
                font-size: 20px;
                color: black;

                &.active {
                    color: blue;
                    text-decoration: underline;
                }
            }
        </style>
    </head>
    <body>
        <div style="display: flex; gap: 30px; width: 100%; padding: 20px; border-bottom: 1px solid black;">
            <a href="/galleries">Galéria</a>
            <a href="/upload">Feltöltés</a>
        </div>

        <h1>Galéria</h1>
        <a href="/galleries" style="text-decoration: underline; padding: 20px;">Vissza</a>

        <h2>Név: {{ $name }}</h2>

        <div class="gallery">
            @foreach($pet->getMedia('attachments') as $media)
                <img src="{{ $media->getUrl() }}" alt="Image">
            @endforeach
        </div>
    </body>
</html>
