@props(['product'])

<x-form action="/admin/dashboard/products/{{ $product->id }}" method="DELETE">
    <button type="submit"
        class="border-2 px-4 py-2 rounded-md font-bold border-red-500 cursor-pointer group/button text-sm hover:text-red-50 text-red-500 hover:bg-red-500">
        Delete Card
    </button>
</x-form>
