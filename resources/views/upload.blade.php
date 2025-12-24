@vite(['resources/css/app.css', 'resources/js/app.js'])
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <title>Feltöltés</title>
    </head>
    <body>
        <div class="flex gap-5 border-b-2 p-4">
            <a href="/galleries">Galéria</a>
            <a href="#" class="text-blue-500">Feltöltés</a>
        </div>
        
        <div x-data="{ loading: false }">
            <form method="POST" action="/posts" enctype="multipart/form-data" class="p-5"
                @submit="loading = true">
                @csrf

                <input type="file" name="file" class="py-5" required>

                <select name="animal_id">
                    <option value="">-- Állat --</option>
                    @foreach($animals as $animal)
                        <option value="{{ $animal->id }}">{{ $animal->name }}</option>
                    @endforeach
                </select>

                <button type="submit"
                    :disabled="loading"
                    class="px-4 py-2 bg-blue-600 text-white rounded flex items-center gap-2">

                    <span x-show="!loading">Feltöltés</span>

                    <span x-show="loading" class="flex items-center gap-2">
                        <svg class="animate-spin h-5 w-5 text-white"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10"
                                    stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8v8z"></path>
                        </svg>
                        Feltöltés...
                    </span>
                </button>
            </form>
        </div>
    </body>
</html>