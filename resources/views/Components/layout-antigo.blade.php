<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home Page</title>
    </head>
    <body>
        {{-- Dois colchetes é a mesma coisa se eu abrisse uma tag <?php ?> --}}
        <nav>
            <x-nav-link href="/">Início</x-nav-link>
            <x-nav-link href="/sobre">Sobre</x-nav-link>
            <x-nav-link href="/contato">Contato</x-nav-link>
        </nav>
        {{-- Pega os valores que forem colocados dentro da tag do component --}}
        {{ $slot }} 
    </body>
</html>
