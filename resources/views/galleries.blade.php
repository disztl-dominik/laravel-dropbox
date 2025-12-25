@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Galériák</title>
    </head>
    <body>
        <div class="flex gap-5 border-b-2 p-4">
            <a href="#" class="text-blue-500">Galéria</a>
            <a href="/upload">Feltöltés</a>
        </div>

        <div class="p-8">
            @foreach($animals as $animal)
                <div class="max-w-sm overflow-hidden shadow-2xl rounded-xl">
                    <a href="/gallery/{{ $animal->id}}" class="flex flex-col">
                        <h3 class="text-2xl font-unit font-black text-center p-4">{{ $animal->name }}</h3>
                        <img
                            src="{{ $animal->thumbnail()->getUrl() }}"
                            alt="Image"
                            class="pl-5 pr-5"
                            x-transition
                        >
                        <p class="text-center p-4">{{ $animal->description }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </body>
</html>
