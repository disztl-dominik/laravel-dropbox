@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Az oldal nem található</title>
    </head>
    <body>
        @include('partials.header')
        <div class="flex items-center max-w-6xl mx-auto px-6 pt-46 pb-24">
            <div class="grid md:grid-cols-2 items-center gap-2">
                <div class="relative flex justify-center">
                    <img 
                        src="{{ asset('images/logo.jpg') }}" 
                        alt="Az oldal nem található"
                        class="w-full max-w-sm"
                    >
                </div>
                <div>
                    <h1 class="text-3xl font-bold text-gray-900 leading-tight mb-6">
                        Hiába szimatoltunk, nem találjuk a keresett oldalt
                    </h1>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ url('/') }}"
                        class="hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300 shadow-md"
                        style="background-color: oklch(53.48% .1298 243.78)"
                        >
                            Főoldal
                        </a>
                        <a href="javascript:history.back()"
                        class="border border-gray-300 hover:border-gray-400 text-gray-700 px-6 py-3 rounded-lg font-medium transition duration-300"
                        >
                            Vissza
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
    @include('partials.footer')
</html>
