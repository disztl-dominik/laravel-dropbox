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

            <div
                x-data="gallery({{ $animalMedia->count() }})"
                >
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-1">
                    @foreach ($animalMedia as $index => $image)
                        <div
                            x-show="isVisible({{ $index }})"
                            x-transition
                            class="aspect-square overflow-hidden"
                        >
                            <img
                                src="{{ $image->getUrl() }}"
                                alt=""
                                class="w-full h-full object-cover"
                                loading="lazy"
                            >
                        </div>
                    @endforeach
                </div>

                <div class="flex justify-between items-center mt-4">
                    <button
                        @click="prev"
                        :disabled="page === 0"
                        class="
                            px-4 py-2 rounded
                            bg-gray-200
                            cursor-pointer
                            hover:bg-gray-300
                            disabled:hover:bg-gray-200
                            disabled:cursor-default
                            disabled:opacity-50
                        "
                    >
                        ← Előző
                    </button>

                    <span class="text-sm text-gray-600">
                        <span x-text="page + 1"></span> / <span x-text="totalPages"></span>
                    </span>

                    <button
                        @click="next"
                        :disabled="page >= totalPages - 1"
                        class="
                            px-4 py-2 rounded
                            bg-gray-200
                            cursor-pointer
                            hover:bg-gray-300
                            disabled:hover:bg-gray-200
                            disabled:cursor-default
                            disabled:opacity-50
                        "
                    >
                        Következő →
                    </button>
                </div>
            </div>
        </section>
    </body>
</html>
<script>
    function gallery(totalItems) {
        return {
            page: 0,
            perPage: 4,
            totalItems: totalItems,

            get totalPages() {
                return Math.ceil(this.totalItems / this.perPage);
            },

            isVisible(index) {
                return (
                    index >= this.page * this.perPage &&
                    index < (this.page + 1) * this.perPage
                );
            },

            next() {
                if (this.page < this.totalPages - 1) {
                    this.page++;
                }
            },

            prev() {
                if (this.page > 0) {
                    this.page--;
                }
            }
        }
    }
</script>
