<x-layouts.auth>
    <x-slot:page-title>
        Pure Zen Essence | Register
    </x-slot>
    <x-slot:page-description>
        Create a Pure Zen Essence account.
    </x-slot>

    <main>
        <x-section
            id="register"
            class="flex h-full items-center justify-center bg-[url('https://images.pexels.com/photos/807598/pexels-photo-807598.jpeg')] bg-cover bg-top bg-no-repeat py-20 md:px-24 md:py-24 lg:px-68"
            aria-labelledby="register-header"
        >
            <x-forms.registration-form />
        </x-section>
    </main>
</x-layouts.auth>
