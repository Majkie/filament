@php
    $button = $this->getButton()
@endphp

<div x-data="{ isOpen: false }" x-cloak class="relative">

    <div @click="isOpen = !isOpen">
        {{ $button }}
    </div>

    <div x-show="isOpen"
         x-on:click.away="isOpen = false"
         x-transition:enter="transition"
         x-transition:enter-start="-translate-y-1 opacity-0"
         x-transition:enter-end="translate-y-0 opacity-100"
         x-transition:leave="transition"
         x-transition:leave-start="translate-y-0 opacity-100"
         x-transition:leave-end="-translate-y-1 opacity-0"
         class="absolute z-10 mt-2 shadow-xl rounded-md w-52 origin-top-right right-0">
        <ul class="py-1 space-y-1 overflow-hidden bg-white shadow rounded-md">
            @foreach($this->getFields() as $field)
                {{ $field }}
            @endforeach
        </ul>
    </div>

</div>
