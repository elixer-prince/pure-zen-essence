@props([
    "product",
])

<x-form action="/admin/dashboard/products/{{ $product->id }}" method="DELETE">
    <button
        type="submit"
        class="group/button cursor-pointer rounded-md border-2 border-red-500 px-4 py-2 text-sm font-bold text-red-500 hover:bg-red-500 hover:text-red-50"
    >
        Delete Card
    </button>
</x-form>
