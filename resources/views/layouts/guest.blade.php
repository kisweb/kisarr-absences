<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-partials.head :title="$title ?? 'Kis@rrAbsences' "/>
    </head>
    <body>

        <x-partials.nav />

        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8"">
            {{ $slot }}
        </div>

        <x-partials.footer />

        <livewire:scripts />
    </body>
</html>
