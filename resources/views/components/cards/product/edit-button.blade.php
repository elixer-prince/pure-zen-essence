@props(['product'])

<x-button as="a" href="/admin/dashboard/products/{{ $product->id }}/edit"
    class="bg-blue-950 group/button text-sm text-brand-darkblue-50 hover:bg-brand-darkblue-800" wire:navigate>
    Edit <span class="hidden sm:block">Card</span>
</x-button>
