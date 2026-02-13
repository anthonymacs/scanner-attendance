<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Scanner') }}</title>

    @livewireStyles
</head>
<body>

    {{ $slot }}

    @livewireScripts
</body>
</html>
