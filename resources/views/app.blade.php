<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nguyen Van Nhan</title>

    <meta name="description" content="This is portfolio of Nguyen Van Nhan">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="antialiased min-h-screen">
    @include('theme-toggle')

    <div class="relative flex min-h-dvh flex-col bg-background">
        <div id="info" class="container py-8 flex flex-col gap-8">
            <img class="w-40 h-40 m-auto p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500" src="{{ Vite::asset('resources/images/avatar.jpg') }}" alt="Bordered avatar">
            <div class="flex gap-2 justify-center items-center">
                <a href="{{ config('mine.links.linkedin') }}" target="_blank">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd" />
                        <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                    </svg>
                </a>
                <a href="{{ config('mine.links.github') }}" target="_blank">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12.006 2a9.847 9.847 0 0 0-6.484 2.44 10.32 10.32 0 0 0-3.393 6.17 10.48 10.48 0 0 0 1.317 6.955 10.045 10.045 0 0 0 5.4 4.418c.504.095.683-.223.683-.494 0-.245-.01-1.052-.014-1.908-2.78.62-3.366-1.21-3.366-1.21a2.711 2.711 0 0 0-1.11-1.5c-.907-.637.07-.621.07-.621.317.044.62.163.885.346.266.183.487.426.647.71.135.253.318.476.538.655a2.079 2.079 0 0 0 2.37.196c.045-.52.27-1.006.635-1.37-2.219-.259-4.554-1.138-4.554-5.07a4.022 4.022 0 0 1 1.031-2.75 3.77 3.77 0 0 1 .096-2.713s.839-.275 2.749 1.05a9.26 9.26 0 0 1 5.004 0c1.906-1.325 2.74-1.05 2.74-1.05.37.858.406 1.828.101 2.713a4.017 4.017 0 0 1 1.029 2.75c0 3.939-2.339 4.805-4.564 5.058a2.471 2.471 0 0 1 .679 1.897c0 1.372-.012 2.477-.012 2.814 0 .272.18.592.687.492a10.05 10.05 0 0 0 5.388-4.421 10.473 10.473 0 0 0 1.313-6.948 10.32 10.32 0 0 0-3.39-6.165A9.847 9.847 0 0 0 12.007 2Z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <div class="text-center">
                <p>My major is Information Technology Engineer at Ho Chi Minh University of Technology and Education.</p>
                <p>I have more than 4 years of experience with PHP Developers and related technology.</p>
                <p>I desire to apply the knowledge and experience I have to serve the company, contribute to its development, and also affirm, and improve my value.</p>
            </div>
        </div>

        <hr class="my-8" />

        <div class="my-8">
            <div class="container grid grid-cols-3 gap-6 mb-8">
                <div class="flex flex-col border rounded-md gap-4 p-4 cursor-pointer">
                    <div class="flex gap-2 justify-center items-center">
                        <img class="h-16 w-auto" src="{{ Vite::asset('resources/images/laravel-logo.png') }}" />
                    </div>
                    <div class="text-center">
                        <span class="font-bold text-lg block">PHP - Laravel</span>
                        <span>4/5</span>
                    </div>
                    <div class="mx-16">
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: calc(4/5 * 100%)"></div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col border rounded-md gap-4 p-4 cursor-pointer">
                    <div class="flex gap-2 justify-center items-center">
                        <img class="h-16 w-auto" src="{{ Vite::asset('resources/images/html-css-js-logo.png') }}" />
                    </div>
                    <div class="text-center">
                        <span class="font-bold text-lg block">HTML5 - CSS3</span>
                        <span>4/5</span>
                    </div>
                    <div class="mx-16">
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: calc(4/5 * 100%)"></div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col border rounded-md gap-4 p-4 cursor-pointer">
                    <div class="flex gap-2 justify-center items-center">
                        <img class="h-16 w-auto" src="{{ Vite::asset('resources/images/mysql-logo.png') }}" />
                    </div>
                    <div class="text-center">
                        <span class="font-bold text-lg block">MySQL</span>
                        <span>4/5</span>
                    </div>
                    <div class="mx-16">
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: calc(4/5 * 100%)"></div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col border rounded-md gap-4 p-4 cursor-pointer">
                    <div class="flex gap-2 justify-center items-center">
                        <img class="h-16 w-auto" src="{{ Vite::asset('resources/images/vuejs-logo.png') }}" />
                    </div>
                    <div class="text-center">
                        <span class="font-bold text-lg block">VueJS - Nuxt</span>
                        <span>3/5</span>
                    </div>
                    <div class="mx-16">
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: calc(3/5 * 100%)"></div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col border rounded-md gap-4 p-4 cursor-pointer">
                    <div class="flex gap-2 justify-center items-center">
                        <img class="h-16 w-auto" src="{{ Vite::asset('resources/images/reactjs-logo.png') }}" />
                    </div>
                    <div class="text-center">
                        <span class="font-bold text-lg block">ReactJS</span>
                        <span>3/5</span>
                    </div>
                    <div class="mx-16">
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: calc(3/5 * 100%)"></div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col border rounded-md gap-4 p-4 cursor-pointer">
                    <div class="flex gap-2 justify-center items-center">
                        <img class="h-16 w-auto" src="{{ Vite::asset('resources/images/flutter-logo.png') }}" />
                    </div>
                    <div class="text-center">
                        <span class="font-bold text-lg block">Flutter</span>
                        <span>2/5</span>
                    </div>
                    <div class="mx-16">
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-blue-600 h-2.5 rounded-full" style="width: calc(2/5 * 100%)"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container flex flex-wrap items-center justify-center gap-3">
                <div data-tooltip-target="tooltip-php" class="p-2 w-16 h-16 rounded-full border flex items-center justify-center cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-900">
                    <img src="{{ Vite::asset('resources/images/php-circle-logo.png') }}" />
                </div>
                <div id="tooltip-php" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    PHP
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

                <div data-tooltip-target="tooltip-rails" class="p-2 w-16 h-16 rounded-full border flex items-center justify-center cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-900">
                    <img src="{{ Vite::asset('resources/images/rails-logo.png') }}" />
                </div>
                <div id="tooltip-rails" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Ruby On Rails
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

                <div data-tooltip-target="tooltip-nodejs" class="p-3 w-16 h-16 rounded-full border flex items-center justify-center cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-900">
                    <img src="{{ Vite::asset('resources/images/nodejs-logo.png') }}" />
                </div>
                <div id="tooltip-nodejs" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    NodeJS
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

                <div data-tooltip-target="tooltip-nestjs" class="p-3 w-16 h-16 rounded-full border flex items-center justify-center cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-900">
                    <img src="{{ Vite::asset('resources/images/nestjs-logo.png') }}" />
                </div>
                <div id="tooltip-nestjs" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    NestJS
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

                <div data-tooltip-target="tooltip-nuxt" class="p-2 w-16 h-16 rounded-full border flex items-center justify-center cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-900">
                    <img class="dark:inline-block hidden" src="{{ Vite::asset('resources/svgs/nuxt-logo.svg') }}" />
                    <img class="dark:hidden inline-block" src="{{ Vite::asset('resources/svgs/nuxt-black-logo.svg') }}" />
                </div>
                <div id="tooltip-nuxt" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    Nuxt Framework
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

                <div data-tooltip-target="tooltip-nextjs" class="p-2 w-16 h-16 rounded-full border flex items-center justify-center cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-900">
                    <img class="dark:inline-block hidden" src="{{ Vite::asset('resources/svgs/nextjs-logo.svg') }}" />
                    <img class="dark:hidden inline-block" src="{{ Vite::asset('resources/svgs/nextjs-black-logo.svg') }}" />
                </div>
                <div id="tooltip-nextjs" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    NextJs
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

                <div data-tooltip-target="tooltip-gcp" class="p-4 w-16 h-16 rounded-full border flex flex-col gap-0.5 items-center justify-center cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-900">
                    <img class="dark:inline-block hidden" src="{{ Vite::asset('resources/svgs/gcp-logo.svg') }}" />
                </div>
                <div id="tooltip-gcp" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    GCP
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

                <div data-tooltip-target="tooltip-aws" class="p-2 w-16 h-16 rounded-full border flex flex-col gap-0.5 items-center justify-center cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-900">
                    <img class="dark:inline-block hidden" src="{{ Vite::asset('resources/images/aws-logo.png') }}" />
                </div>
                <div id="tooltip-aws" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    AWS
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

            </div>
        </div>

        <hr class="my-8" />

        <div
    </div>
</body>

</html>
