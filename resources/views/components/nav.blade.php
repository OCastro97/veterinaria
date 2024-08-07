@props(['active' => false])

<a class="{{ $active ? 'bg-black-900 text-black':'text-black-300 hover:bg-gray-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium text-black-300 hover:bg-gray-700 hover:text-white"
    aria-current="{{ $active ? 'page':'false' }}"
    {{ $attributes }}
>{{ $slot }}</a>