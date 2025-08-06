<x-layouts.app>
    <x-slot>Pure Zen Essence | Login</x-slot>
    <x-slot:page-description>
        Login to Pure Zen Essence.
    </x-slot>

    <main class="min-h-full">
        <x-section
            id="login"
            class="flex items-center justify-center px-8 py-16 sm:px-16"
            aria-labelledby="login-header"
        >
            <x-form
                class="w-full max-w-120 rounded-lg border-2 border-neutral-500 p-8 sm:p-16"
                action="/login"
                method="POST"
            >
                <div class="flex flex-col items-center">
                    <x-brand-icon />

                    <x-section-heading
                        id="login-header"
                        class="border-b-brand-green-500 mb-2"
                    >
                        Login
                    </x-section-heading>
                </div>

                <div class="mb-2 flex flex-col gap-4">
                    <x-form.field>
                        <x-form.label for="email">Email</x-form.label>
                        <x-form.input
                            id="email"
                            type="email"
                            name="email"
                            placeholder="Your Email"
                            value="{{ old('email') }}"
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
                            placeholder="Your Password"
                            required
                        />
                    </x-form.field>

                    <a
                        href="/register"
                        class="-mt-1 text-sm font-bold text-neutral-700 hover:underline"
                        wire:navigate
                    >
                        Don't have an account? Create one!
                    </a>
                </div>

                <x-button
                    class="bg-brand-green-500 text-brand-green-50 hover:bg-brand-green-600"
                    type="submit"
                >
                    Login
                    <i class="fa-solid fa-user"></i>
                </x-button>
            </x-form>
        </x-section>
    </main>
</x-layouts.app>
