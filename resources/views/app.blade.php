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
        <div id="info" class="container py-8 flex flex-col gap-8 justify-center items-center">
            <img class="w-40 h-40 m-auto p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500" src="{{ Vite::asset('resources/images/avatar.jpg') }}" alt="Bordered avatar">

            @include('small-cta-area')

            <div class="text-center max-w-[600px]">
                <p>I'm an <strong>FullStack Developers</strong> with more than <strong>4 years of experience</strong></p>
                <p>I desire to apply the knowledge and experience I have to serve the company, contribute to its development, and also affirm, and improve my value.</p>
            </div>
        </div>

        <hr class="my-8" />

        <div class="my-8">
            <div class="container grid md:grid-cols-3 gap-6 mb-8">
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
                    <img src="{{ Vite::asset('resources/svgs/gcp-logo.svg') }}" />
                </div>
                <div id="tooltip-gcp" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    GCP
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

                <div data-tooltip-target="tooltip-aws" class="p-2 w-16 h-16 rounded-full border flex flex-col gap-0.5 items-center justify-center cursor-pointer hover:bg-slate-100 dark:hover:bg-slate-900">
                    <img src="{{ Vite::asset('resources/images/aws-logo.png') }}" />
                </div>
                <div id="tooltip-aws" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    AWS
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

            </div>
        </div>

        <hr class="mt-8" />

        @include('cta-area')

        <hr class="mb-8" />

        <div class="flex items-center justify-center">
            <img src="{{ Vite::asset('resources/images/projects.gif') }}" />
        </div>

        <hr class="mt-8" />
        <div class="py-3 text-center">
            @include('small-cta-area')
            <a href="{{ Vite::asset('resources/files/PHP_Nguyen_Van_Nhan.pdf') }}" download="PHP_Nguyen_Van_Nhan.pdf" class="text-center mt-2">Nguyen Van Nhan, {{ date('Y') }}</a>
        </div>
    </div>
</body>

</html>
