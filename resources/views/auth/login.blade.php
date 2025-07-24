<x-layouts.app>
    <x-slot name="pageTitle">
        Pure Zen Essence | Login
    </x-slot>
    <x-slot name="pageDescription">
        This is the login page for the Pure Zen Essence website.
    </x-slot>

    <main class="h-full">
        <x-section id="login" class="flex px-8 py-16 sm:px-16 items-center justify-center"
            aria-labelledby="login-header">
            <x-forms.form class="border-2 max-w-120 w-full border-neutral-500 rounded-lg p-8 sm:p-16" action="/login"
                method="POST">
                <div class="flex flex-col items-center">
                    <x-brand-icon />

                    <x-section-heading id="login-header" class="border-b-brand-green-500 mb-2">
                        Login
                    </x-section-heading>
                </div>

                <div class="flex flex-col mb-2 gap-4">
                    <x-forms.field>
                        <x-forms.label for="email">Email</x-forms.label>
                        <x-forms.input id="email" type="email" name="email" placeholder="Your Email" required />
                    </x-forms.field>

                    <x-forms.field>
                        <x-forms.label for="password">Password</x-forms.label>
                        <x-forms.input id="password" type="password" name="password" placeholder="Your Password"
                            required />
                    </x-forms.field>
                </div>

                <x-button class="bg-brand-green-500 text-brand-green-50 hover:bg-brand-green-600" type="button">
                    Login
                    <i class="fa-solid fa-user"></i>
                </x-button>
            </x-forms.form>
        </x-section>
    </main>
</x-layouts.app>
