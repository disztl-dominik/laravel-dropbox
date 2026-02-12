<header
    class="fixed w-full z-20 p-4 xl:px-6 2xl:px-8
    bg-gray-800/75 border-b-2 border-[#757479]
    backdrop-blur-sm"
>
    <nav class="flex items-center justify-between text-white font-unit font-black uppercase text-sm lg:text-sm xl:text-lg 2xl:text-xl">
        <a href="https://codebrains.hu/noedemo" class="p-1 focus:outline-hidden focus-visible:ring-2 focus-visible:ring-bright">
            <img src="{{ asset('images/noe.png') }}"  alt="Noé Állatotthon Alapítvány" class="h-12 lg:h-10 xl:h-12 2xl:h-16 w-auto">
        </a>
        <a href="https://codebrains.hu/noedemo/orokbefogadas" class="hidden lg:mt-2 lg:py-1 border-b-2 lg:border-transparent hover:border-bright focus:outline-hidden focus-visible:border-bright lg:inline-block">
            Örökbefogadás
        </a>
        <a href="https://codebrains.hu/noedemo/rolunk" class="hidden lg:mt-2 lg:py-1 border-b-2 lg:border-transparent hover:border-bright focus:outline-hidden focus-visible:border-bright lg:inline-block">
            Rólunk
        </a>
        <a href="https://codebrains.hu/noedemo/segitenek" class="hidden lg:mt-2 lg:py-1 border-b-2 lg:border-transparent hover:border-bright focus:outline-hidden focus-visible:border-bright lg:inline-block">
            Segítenék
        </a>
        <a href="https://codebrains.hu/noedemo/projektek" class="hidden lg:mt-2 lg:py-1 border-b-2 lg:border-transparent hover:border-bright focus:outline-hidden focus-visible:border-bright lg:inline-block">
            Projektek
        </a>
        <a href="https://codebrains.hu/noedemo/blog" class="hidden lg:mt-2 lg:py-1 border-b-2 lg:border-transparent hover:border-bright focus:outline-hidden focus-visible:border-bright lg:inline-block">
            Blog
        </a>
        <a href="https://codebrains.hu/noedemo/kapcsolat" class="hidden lg:mt-2 lg:py-1 border-b-2 lg:border-transparent hover:border-bright focus:outline-hidden focus-visible:border-bright lg:inline-block">
            Kapcsolat
        </a>
        <a href="https://codebrains.hu/noedemo/adomanyozas" class="hidden lg:mt-2 lg:py-1 border-b-2 lg:border-transparent hover:border-bright focus:outline-hidden focus-visible:border-bright lg:inline-block">
            Adományozás
        </a>
            <button aria-controls="menu-sidebar" type="button" class="inline-flex lg:hidden ml-auto mr-2 items-center p-2 mt-2 ms-3 text-sm
                text-background/90 rounded-full cursor-pointer hover:text-white
                focus:outline-none focus:ring-2 focus:ring-bright"
            >
                <span class="sr-only">Menü megnyitása</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                </svg>
                <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
            </button>
        <a href="https://noeadoegyszazalek.hu/" target="_blank" class="hidden py-3 px-8 lg:text-xl xl:text-2xl 2xl:text-4xl items-center rounded-full bg-accent text-accent-foreground whitespace-nowrap hover:bg-dull focus-visible:bg-dull focus:outline-hidden focus-visible:ring-2 focus-visible:ring-bright lg:inline-flex" style="background-color: oklch(53.48% .1298 243.78)">
            <svg class="size-8 mr-2" width="120" height="120" version="1.1" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg">
                <g fill="currentColor">
                    <circle cx="99" cy="36" r="2.3"></circle>
                    <circle cx="86" cy="35" r="2.2"></circle>
                    <path d="m105 64c-5 3-12-0.13-12-1.9l0.16-15c0.61-0.48 2.3-1.3 2.3-3.3-0.037-2-1.3-3.8-3.6-3.8s-3.6 1.8-3.6 3.6c-0.0063 1.7 0.63 2.8 2 3.5 0.01 0.8-0.095 9.1-0.094 15-0.061 0.97-2.2 2.4-6.1 2.4-3.4 0-5.2-1.7-8.8-6.4 1.4-14 2.8-23-7.7-27 0.47-8.4 5.1-17 18-17 8.9 0.21 20 4.3 24 20 1.9 7 4.7 23-4.9 29zm2.8 1.3c7-4.6 8.7-18 4.5-33 6.7-1.7 6.6-7.5 5.4-9.7s-6.3-4.9-12-0.91c-5.5-6.8-13-9.7-20-9.7-6.2 0.017-12 2.3-15 6.2-4.9-4.4-11-5.9-13-1.9-1.9 4 3.3 8.7 9.1 10-1.8 5.5-1.6 13-1.4 18-34 9.7-50 16-46 47-11-4.1-17 0.73-17 4.4 0.25 3.4 5.8 9.2 19 5.9 7.5 11 23 6.4 24-2.7l4.5-1.4c5.3 11 15 9.3 19 6.4 0.59 0.69 15 4.4 16-3.9 0.56-3.3-2.8-11-12-6.1 4.5-12 6.7-20 18-29 7.7 7.1 14 1.5 16 0.37zm-46-49c2-0.1 4.8 2.2 7 3.7-0.89 1.4-1.5 3.4-1.5 3.4-3.4-0.81-7.3-1.9-7.7-4.7-0.19-1.6 0.9-2.2 1.7-2.4 0.13-0.029 0.26-0.046 0.39-0.053zm51 5.9c0.47-0.0048 0.94 0.067 1.4 0.22 1.4 0.45 2.4 3.8 1 5.2-1.6 1.6-2.8 1.4-4.2 1.7-0.76-1.6-1.4-3.3-3-5.2 1.9-1.2 3.3-1.9 4.7-1.9zm-47 25c2.6 13 8.4 18 17 21-2.9 2.7-1.5 1.3-3.5 3.4l-0.74-1.8c-7.1 8-11 19-12 21-2.4-1.2-6.6-2.2-12-0.15-0.67-4.4-0.3-13-7.6-20 2.1 5.8 5 8.8 4 23-1.9 2.3-2.7 2.4-4.9 3.4-1.4-2.7-5.1-3.3-7.6-3.4 2.8-5.2 4.7-12-0.28-21 0.9 7.4 2 19-5.6 21l0.66 1.9c13-1.7 13 4.1 5.8 8.4-5.6 3.2-17 2.7-18-15-0.52-18 1.5-23 13-30 4.3 11 28 5.2 26-11zm-4.5 45c5.5 0.085 9.8 3.6 8.7 8.5-0.63 2.8-11 7.7-17-3.1-0.98-1.6-0.36-2.7 0.52-3.2 2.6-1.6 5.4-2.3 7.9-2.2zm-50 0.45c2.7-0.032 5.4 0.79 8.3 1.4 0.27 2.8 0.36 3.5 0.85 5.5-5.9 0.81-9.1 1.5-14-1.7-2.4-1.6-0.91-3.4 0.045-4 1.6-0.86 3.2-1.2 4.9-1.2zm68 2.6c2.5-0.17 4.6 1.1 4.5 4.7-0.056 3-1.9 4.3-11 2.9 0.88-2.5 1-2.8 0.75-5 1.8-1.6 4-2.6 6-2.7z"></path>
                </g>
            </svg> 1%
        </a>
    </nav>
</header>
