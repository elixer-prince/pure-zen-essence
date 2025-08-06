<x-layouts.app>
    <x-slot:page-title>
        Pure Zen Essence | Register
    </x-slot>
    <x-slot:page-description>
        Create a Pure Zen Essence account.
    </x-slot>

    <main>
        <x-section
            id="register"
            class="flex items-center justify-center px-8 py-16 sm:px-16"
            aria-labelledby="register-header"
        >
            <x-form
                class="w-full max-w-120 rounded-lg border-2 border-neutral-500 p-8 sm:p-16"
                action="/register"
                method="POST"
            >
                <div class="flex flex-col items-center">
                    <x-brand-icon />

                    <x-section-heading
                        id="register-header"
                        class="border-b-brand-green-500 mb-2"
                    >
                        Register
                    </x-section-heading>
                </div>

                <div class="flex flex-col gap-4">
                    <x-form.field>
                        <x-form.label for="first_name">First Name</x-form.label>
                        <x-form.input
                            id="first_name"
                            type="text"
                            value="{{ old('first_name') }}"
                            name="first_name"
                            placeholder="John"
                            required
                        />

                        <x-form.error-message for="first_name" />
                    </x-form.field>

                    <x-form.field>
                        <x-form.label for="last_name">Last Name</x-form.label>
                        <x-form.input
                            id="last_name"
                            type="text"
                            name="last_name"
                            placeholder="Doe"
                            value="{{ old('last_name') }}"
                            required
                        />

                        <x-form.error-message for="last_name" />
                    </x-form.field>

                    <x-form.field>
                        <x-form.label for="email">Email</x-form.label>
                        <x-form.input
                            id="email"
                            value="{{ old('email') }}"
                            type="email"
                            name="email"
                            placeholder="john.doe@example.com"
                            required
                        />

                        <x-form.error-message for="email" />
                    </x-form.field>

                    <x-form.field>
                        <x-form.label for="password">Password</x-form.label>
                        <x-form.input
                            id="password"
                            type="password"
                            name="password"
                            placeholder="Enter your password"
                            required
                        />

                        <x-form.error-message for="password" />
                    </x-form.field>

                    <x-form.field>
                        <x-form.label for="password_confirmation">
                            Confirm Password
                        </x-form.label>
                        <x-form.input
                            id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            placeholder="Re-enter your password"
                            required
                        />

                        <x-form.error-message for="password_confirmation" />
                    </x-form.field>

                    <a
                        href="/login"
                        class="-mt-1 text-sm font-bold text-neutral-700 hover:underline"
                        wire:navigate
                    >
                        Already have an account? Login
                    </a>
                </div>

                <x-button
                    class="bg-brand-green-500 text-brand-green-50 hover:bg-brand-green-600"
                    type="submit"
                >
                    Register
                    <i class="fa-solid fa-user"></i>
                </x-button>
            </x-form>
        </x-section>
    </main>
</x-layouts.app>
