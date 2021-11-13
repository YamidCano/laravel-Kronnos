<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @hasSection('title')
            @yield('title') |
        @endif
        {{ config('app.name') }}
    </title>

    <livewire:styles/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <livewire:layouts.nav/>

    <main class="container my-3">
        @hasSection('content')
            @yield('content')
        @else
            {{ $slot }}
        @endif
    </main>

    <livewire:scripts/>
    <livewire:modals/>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        Livewire.on('alert', function(message) {
            Swal.fire(
                '¡Buen trabajo!',
                message,
                'success'
            )
        });

        window.livewire.on('Store', () => {
                $('#Store').modal('hide');
            });

            window.livewire.on('update', () => {
                $('#update').modal('hide');
            });
</body>
</html>
