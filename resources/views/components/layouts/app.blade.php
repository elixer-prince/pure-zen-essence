<!DOCTYPE html>

<html lang="en-JM" class="not-motion-reduce:scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="author" content="Daniel Leith" />
    <meta name="description" content="{{ $pageDescription }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $pageTitle }}</title>
    <link rel="icon" href="{{ asset('images/brand-icon.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-roboto selection:bg-brand-green-900 selection:text-white min-h-screen text-neutral-950">
    {{ $slot }}
</body>

</html>
