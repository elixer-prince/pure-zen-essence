<x-layouts.dashboard>
    <x-slot:page-title>Edit {{ $product->name }}</x-slot:page-title>
    <x-slot:page-description>...</x-slot:page-description>

    <div class="min-h-screen h-full border flex flex-col items-center justify-center">
        <livewire:product-card :$product />

        <x-forms.form class="mt-8 border" method="PATCH">
            <x-forms.field>
                <x-forms.label for="title" />
                <x-forms.input type="text" id="title" name="title" placeholder="Product Title" required />

                <x-forms.error-message for="title" />
            </x-forms.field>

            <x-forms.field>
                <x-forms.label for="title" />
                <x-forms.input id="title" name="title" placeholder="Product Title" />

                <x-forms.error-message for="title" />
            </x-forms.field>
        </x-forms.form>
    </div>

</x-layouts.dashboard>
