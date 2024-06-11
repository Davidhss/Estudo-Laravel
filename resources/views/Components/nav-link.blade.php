{{-- Atributos são valores que passamos que existem em uma tag HTML, já Propriedades são valores que nós criamos para a tag --}}

@props(['active' => false])

<a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium"
    aria-current={{ $active ? 'page' : 'false' }}
    {{ $attributes }}
    >{{ $slot }}</a>

{{-- Aqui estamos extraindo os atributos através do $attributes e os elementos que foram inseridos dentro da tag através do $slot --}}
