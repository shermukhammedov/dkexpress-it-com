<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-gray-50 antialiased">
        <div class="flex min-h-svh flex-col items-center justify-center p-6 md:p-10">
            <div class="w-full max-w-2xl">
                <div class="text-center mb-8">
                    <a href="{{ route('home') }}" class="inline-block" wire:navigate>
                        <span class="text-3xl font-bold bg-gradient-to-r from-blue-500 to-indigo-600 bg-clip-text text-transparent">DK Express</span>
<span class="sr-only">DK Express</span>
                    </a>
                </div>
                {{ $slot }}
            </div>
        </div>
        @fluxScripts
    </body>
</html>
