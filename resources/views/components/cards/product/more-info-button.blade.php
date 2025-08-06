<x-button
    @click="flipped = true"
    class="group/button bg-neutral-950 text-sm text-neutral-50 hover:bg-neutral-800"
    type="button"
>
    More Info
    <span
        class="hidden opacity-0 transition-all duration-500 group-hover/button:inline group-hover/button:opacity-100"
    >
        <i class="fa-solid fa-arrow-right"></i>
    </span>
</x-button>
