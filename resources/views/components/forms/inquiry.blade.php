<x-form
    class="w-160 max-w-full rounded-lg border-3 border-neutral-400 p-8 sm:p-12 md:p-20"
    method="POST"
    action="/mail"
>
    <x-section-heading
        id="contact-header"
        class="border-b-brand-blue-500 mx-auto mb-4"
    >
        <span class="md:hidden">Contact Us! 😊</span>
        <span class="hidden md:inline">Send us a message! 😊</span>
    </x-section-heading>

    <div class="mb-2 flex flex-col gap-4">
        <x-form.field>
            <x-form.label for="name">Full Name</x-form.label>
            <x-form.input
                id="name"
                value="{{ old('name') }}"
                name="name"
                placeholder="John Doe"
            />
        </x-form.field>

        <x-form.field>
            <x-form.label for="email">Email</x-form.label>
            <x-form.input
                id="email"
                name="email"
                type="email"
                value="{{ old('email') }}"
                placeholder="john.doe@example.com"
            />
        </x-form.field>

        <x-form.field>
            <x-form.label for="message">Message</x-form.label>
            <x-form.text-area
                id="message"
                name="message"
                value="{{ old('message') }}"
                id="message"
                rows="4"
                placeholder="Write your message here..."
            ></x-form.text-area>
        </x-form.field>
    </div>

    <x-button
        class="bg-brand-green-500 text-brand-green-50 hover:bg-brand-green-600 mx-auto"
        type="submit"
    >
        Send Email
        <span class="hidden text-xl sm:inline">
            <i class="fa-regular fa-envelope"></i>
        </span>
    </x-button>
</x-form>
