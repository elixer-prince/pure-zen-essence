@props([
    "product",
])

<x-button
    as="a"
    href="/admin/dashboard/products/{{ $product->id }}/edit"
    class="group/button text-brand-darkblue-50 hover:bg-brand-darkblue-800 bg-blue-950 text-sm"
    wire:navigate
>
    Edit
    <span class="hidden sm:block">Card</span>
</x-button>
