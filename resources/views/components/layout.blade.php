<!DOCTYPE html>

<html lang="en-JM">
  <head>
    <meta charset="UTF-8" />
    <meta name="author" cotent="Daniel Leith" />
    <meta name="description" cotent="{{ $pageDescription }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ $pageTitle }}</title>
    {{-- TODO: Switch to an optimized favicon --}}
    <link rel="icon" href="{{ asset('images/brand-icon.png') }}" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    @vite('resources/css/app.css')
  </head>

  <body>
    <x-navbar />

    <main>
      {{ $slot }}
    </main>
  </body>
</html>
