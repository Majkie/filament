@php
    $action = $getAction();
    $url = $getUrl();

    $tag = ((! $action) && $url) ? 'a' : 'button';
@endphp

@if($tag === 'button')
    <button
        wire:click="{{ $action }}"
        class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition w-full text-left">
        <span>{{ $getName() }}</span>
    </button>
@elseif($tag === 'a')
    <a href="{{ $getUrl() }}"
       class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition">
        <span>{{ $getName() }}</span>
    </a>
@endif
