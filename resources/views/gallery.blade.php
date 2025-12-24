@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Galéria</title>
    </head>
    <body>
        <div class="flex gap-3 border-b-2 p-4">
            <a href="/galleries">Galéria</a>
            <a href="/upload">Feltöltés</a>
        </div>

        <section class="container max-w-412 mx-auto my-12 px-[4%] flex flex-col items-center gap-12">
            <div>
                @foreach ($breadcrumbs as $crumb)
                    / <a href="{{ $crumb['path'] }}">
                        {{ $crumb['label'] }}
                    </a>
                @endforeach
            </div>

            <h2 class="text-center text-4xl font-unit font-black uppercase">Galéria</h1>

            <h2 class="text-4xl font-unit font-black mr-2">{{ $name }}</h2>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-1">
                @foreach($animal->getMedia() as $media)
                    <img src="{{ $media->getUrl() }}" alt="Image">
                @endforeach
            </div>
        </section>
    </body>
</html>
