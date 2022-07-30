<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="The official website of Tilen Hudrap - a bassist, songwriter, producer, multi-instrumentalist and backing vocalist">
        <meta name="keywords" content="tilen hudrap, tilen, hudrap, basist, bassist, avtor, songwriter, producent, producer, multi-instrumentalist, vokalist, backing vocalist, ravne na koroškem, slovenija, slovenia, udo, u.d.o., dirkschneider, pestilence, vicious rumors, paradox, dragonlord, testament, wartune, thraw, scepsis, keller, spector bass guitars, emg pickups, darkglass electronics overdrives, straptight straplocks, dunlop strings, ampeg amplification, lenart mlinar, izdelava spletne strani, webdesign, heavy metal, thrash metal, death metal, power metal">
        <meta name="author" content="Lenart Mlinar">
        <meta name="copyright" content="Tilen Hudrap">
        <meta name="robots" content="index, follow">

        <meta property="og:title" content="Tilen Hudrap // The Official Website" />
        <meta property="og:description" content="The official website of Tilen Hudrap - a bassist, songwriter, producer, multi-instrumentalist and backing vocalist" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://www.tilenhudrap.com" />
        <meta property="og:site_name" content="Tilen Hudrap" />

        <title>Tilen Hudrap // The Official Website - {{ $title ?? '' }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles

        <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
    </head>
    <body>
        <div class="app">

            <header>
                <div class="logo">
                    <div>
                        <svg class="text-brand w-12 h-12" fill="currentColor" id="logo" data-name="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600">
                            <path d="M1199.88,402H1080v94h-49V352h240V232.59C1201.36,254.15,1092.87,268,971,268s-230.36-13.85-300-35.41V352H911V496H862V402H742.12c14,24.79,22.88,60.64,22.88,100.5s-8.85,75.77-22.93,100.57L862,723V616h49V772l60,60,60-60V616h49V723l119.93-119.93C1185.85,578.27,1177,542.4,1177,502.5S1185.83,426.79,1199.88,402Z" transform="translate(-671 -232.59)"/>
                        </svg>
                    </div>
                    <div>
                        <a href="{{ route('home') }}">Tilen<span>Hudrap</span></a>
                    </div>
                </div>
                <x-menu/>
                <div class="social hidden md:flex">
                    <ul>
                        <li class="text-xs text-neutral-500 flex items-center gap-6 pr-4"><span class="text-2xl">Follow me on social media</span> <i class="bx bx-right-arrow-alt text-base text-neutral-600"></i></li>
                        <li><a href="https://www.facebook.com/teelen.hudyrap" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/tilen_hudrap_bass/" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                        <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                        <li><a href="#"><i class="bx bxl-youtube"></i></a></li>
                    </ul>
                </div>
            </header>

            <main>
                {{ $slot }}
            </main>

            <footer>
                <div class="mx-8 md:mx-auto w-full md:w-1/2 flex flex-col md:flex-row gap-8 md:gap-0 justify-center md:justify-between [&>div]:w-full md:[&>div]:w-1/4 text-center md:text-left">
                    <div class="flex justify-center md:justify-start">
                        <svg class="w-16 h-16 text-brand/30" fill="currentColor" id="logo" data-name="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600">
                            <path d="M1199.88,402H1080v94h-49V352h240V232.59C1201.36,254.15,1092.87,268,971,268s-230.36-13.85-300-35.41V352H911V496H862V402H742.12c14,24.79,22.88,60.64,22.88,100.5s-8.85,75.77-22.93,100.57L862,723V616h49V772l60,60,60-60V616h49V723l119.93-119.93C1185.85,578.27,1177,542.4,1177,502.5S1185.83,426.79,1199.88,402Z" transform="translate(-671 -232.59)"/>
                        </svg>
                    </div>
                    <div>
                        <ul class="space-y-2">
                            <li class="uppercase font-semibold text-neutral-700 tracking-widest">Navigation</li>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('biography') }}">Biography</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="space-y-2">
                            <li class="uppercase font-semibold text-neutral-700 tracking-widest">Social media</li>
                            <ul class="flex gap-2 text-2xl justify-center md:justify-start">
                                <li><a href="https://www.facebook.com/teelen.hudyrap" target="_blank"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/tilen_hudrap_bass/" target="_blank"><i class="bx bxl-instagram"></i></a></li>
                                <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="#"><i class="bx bxl-youtube"></i></a></li>
                            </ul>
                        </ul>
                    </div>
                    <div class="space-y-4 md:text-right">
                        <div>
                            <a href="https://www.tilenhudrap.com" class="mr-1 text-neutral-400">Tilen Hudrap</a> &copy; All rights reserved, 2022.
                        </div>
                        <div>
                            Website made by <a href="https://www.lenartmlinar.com" class="ml-1 text-neutral-400" target="_blank">Lenart Mlinar</a>.
                        </div>
                    </div>
                </div>
            </footer>

        </div>

    @livewireScripts
    </body>
</html>