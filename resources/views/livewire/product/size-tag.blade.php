<div
    :key="{{ $size["id"] }}"
    wire:click="setPrice({{ $sizeId }}, {{ $size["price"] }})"
    :class="{
        'bg-brand-darkblue-950 select-none text-brand-darkblue-50': $wire
            .currentSizeId === {{ $sizeId }},
        'text-brand-darkblue-950 cursor-pointer hover:bg-brand-darkblue-950/25': $wire.currentSizeId !==
            {{ $sizeId }}
    }"
    class="border-brand-darkblue-950 rounded-full border-2 px-4 py-1 text-xs font-bold transition-colors duration-500 md:text-sm"
>
    {{ $size["name"] }}
</div>
