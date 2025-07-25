<div :key="{{ $size['id'] }}"
    wire:click="setPrice({{ $size['price'] }}, {{ $product->id }}, {{ $size['id'] }}, {{ $selected }});"
    class="cursor-pointer text-xs not-first:border-2 not-first:border-brand-darkblue-950 transition-colors duration-500 first:bg-brand-darkblue-950 px-4 not-first:text-brand-darkblue-950 font-bold not-first:hover:bg-brand-darkblue-950/25 first:text-brand-darkblue-50 md:text-sm py-1 rounded-full">
    {{ $size['name'] }} :

    @if ($selected)
        {{ $size['id'] }}
    @endif
</div>
