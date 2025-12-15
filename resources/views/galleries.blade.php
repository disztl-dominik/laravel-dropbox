<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Galériák</title>
        <style>
            body {
                margin: 0;
            }
            h1 {
                padding: 20px;
            }
            .gallery {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                padding: 20px;
            }
            .gallery-image {
                display: flex;
                width: 200px;
                height: 200px;
                padding: 5px;
                border: 1px solid black;
                border-radius: 10px;
                align-items: center;
                justify-content: center;
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
            <a href="#" class="active">Galéria</a>
            <a href="/upload">Feltöltés</a>
        </div>

        <h1>Galériák</h1>

        <div class="gallery">
            @foreach($pets as $pet)
            <div class="gallery-image">
                <a href="/gallery/{{ $pet->id}} ">
                    <h3>{{ $pet->name }}</h3>
                    <p>{{ $pet->description }}</p>
                </a>
            </div>
            @endforeach
        </div>
    </body>
</html>
