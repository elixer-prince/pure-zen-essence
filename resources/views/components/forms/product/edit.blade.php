@props(['product'])

<x-form class="my-8" action="/admin/dashboard/products/{{ $product->id }}" method="PATCH">
    <x-form.field>
        <x-form.label for="image">Image</x-form.label>
        <x-form.input type="text" id="image" name="image" placeholder="..." value="{{ $product->image }}"
            required />

        <x-form.error-message for="image" />
    </x-form.field>

    <x-form.field>
        <x-form.label for="title">Title</x-form.label>
        <x-form.input type="text" id="title" value="{{ $product->title }}" name="title"
            placeholder="Coconut Oil" required />

        <x-form.error-message for="title" />
    </x-form.field>

    <x-form.field>
        <x-form.label for="description">Description</x-form.label>
        <x-form.text-area id="description" name="description" placeholder="Add a description..." rows="3"
            required>{{ $product->description }}</x-form.text-area>

        <x-form.error-message for="description" />
    </x-form.field>

    <x-form.field>
        <x-form.label for="sizes">Sizes</x-form.label>
        <x-form.text-area type="text" id="sizes" name="sizes" placeholder="..." required>
            @foreach ($product->sizes as $size)
                property
            @endforeach
        </x-form.text-area>

        <x-form.error-message for="sizes" />
    </x-form.field>

    <div class="flex gap-4">
        <button type="submit"
            class="bg-brand-darkblue-500 cursor-pointer hover:bg-brand-darkblue-600 font-bold transition-colors text-brand-green-50 rounded-md px-4 py-2">Save
            changes</button>

        <x-button type="a" href="/"
            class="border-neutral-500 border-2 transition-colors hover:bg-neutral-500 hover:text-neutral-50 font-bold text-neutral-500 rounded-md px-4 py-2">Cancel</x-button>
    </div>
</x-form>
