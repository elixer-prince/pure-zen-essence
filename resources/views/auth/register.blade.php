<x-layouts.app>
    <x-slot:page-title>Pure Zen Essence | Register</x-slot:page-title>
    <x-slot:page-description>Create a Pure Zen Essence account.</x-slot:page-description>

    <main>
        <x-section id="register" class="flex px-8 py-16 sm:px-16 items-center justify-center"
            aria-labelledby="register-header">
            <x-forms.form class="border-2 max-w-120 w-full border-neutral-500 rounded-lg p-8 sm:p-16" action="/register"
                method="POST">
                <div class="flex flex-col items-center">
                    <x-brand-icon />

                    <x-section-heading id="register-header" class="border-b-brand-green-500 mb-2">
                        Register
                    </x-section-heading>
                </div>

                <div class="flex flex-col gap-4">
                    <x-forms.field>
                        <x-forms.label for="name">Full Name</x-forms.label>
                        <x-forms.input id="name" type="text" name="name" placeholder="John Doe" required />

                        <x-forms.error-message for="name" />
                    </x-forms.field>

                    <x-forms.field>
                        <x-forms.label for="email">Email</x-forms.label>
                        <x-forms.input id="email" type="email" name="email" placeholder="john.doe@example.com"
                            required />

                        <x-forms.error-message for="email" />
                    </x-forms.field>

                    <x-forms.field>
                        <x-forms.label for="password">Password</x-forms.label>
                        <x-forms.input id="password" type="password" name="password" placeholder="Enter your password"
                            required />

                        <x-forms.error-message for="password" />
                    </x-forms.field>

                    <x-forms.field>
                        <x-forms.label for="password_confirmation">Confirm Password</x-forms.label>
                        <x-forms.input id="password_confirmation" type="password" name="password_confirmation"
                            placeholder="Re-enter your password" required />

                        <x-forms.error-message for="password_confirmation" />
                    </x-forms.field>

                    <a href="/login" class="text-sm text-neutral-700 -mt-1 font-bold hover:underline" wire:navigate>
                        Already have an account? Login
                    </a>
                </div>

                <x-button class="bg-brand-green-500 text-brand-green-50 hover:bg-brand-green-600" type="button">
                    Register
                    <i class="fa-solid fa-user"></i>
                </x-button>
            </x-forms.form>
        </x-section>
    </main>
</x-layouts.app>
