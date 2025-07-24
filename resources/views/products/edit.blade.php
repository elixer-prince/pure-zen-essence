<x-layouts.dashboard>
    <x-slot:page-title>Edit Product Name</x-slot:page-title>
    <x-slot:page-description>...</x-slot:page-description>

    <div class="min-h-screen h-full border flex flex-col items-center justify-center">
        <livewire:product-card :$product />

        <x-forms.form class="mt-8 border" method="PATCH">
            <div>
                <x-forms.form-label for="title" />
                <x-forms.form-input type="text" id="title" name="title" placeholder="Product Title" required />
            </div>
            <div>
                <x-forms.form-label for="title" />
                <x-forms.form-input id="title" name="title" placeholder="Product Title" />
            </div>
        </x-forms.form>
    </div>

</x-layouts.dashboard>
