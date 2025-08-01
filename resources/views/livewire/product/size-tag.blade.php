<div :key="{{ $size['id'] }}" wire:click="setPrice({{ $sizeId }}, {{ $size['price'] }}, {{ $product }})"
    :class="{
        'bg-brand-darkblue-950 select-none text-brand-darkblue-50': $wire
            .currentSizeId === {{ $sizeId }},
        'text-brand-darkblue-950 cursor-pointer hover:bg-brand-darkblue-950/25': $wire.currentSizeId !==
            {{ $sizeId }}
    }"
    class="text-xs transition-colors border-brand-darkblue-950 border-2 duration-500 px-4 font-bold md:text-sm py-1 rounded-full">
    {{ $size['name'] }}
</div>
