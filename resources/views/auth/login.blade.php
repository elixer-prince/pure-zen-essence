<x-layouts.app>
    <x-slot name="pageTitle">Pure Zen Essence | Login</x-slot>
    <x-slot name="pageDescription">...</x-slot>

    <main class="h-full">
        <x-section id="login" class="flex h-full items-center justify-center" aria-labelledby="login-header">
            <x-forms.form>
                <x-section-heading id="login-header" class="border-b-brand-green-500" />

                <div>
                    <x-forms.form-label for="email">Email</x-forms.form-label>
                    <x-forms.form-input id="email" type="email" name="email" placeholder="Your Email" />
                </div>
                <div>
                    <x-forms.form-label for="password">Password</x-forms.form-label>
                    <x-forms.form-input id="password" type="password" name="password" placeholder="Your Password" />
                </div>
                <x-button class="bg-brand-green-500 text-brand-green-50 hover:bg-brand-green-600"
                    type="button">Login</x-button>
            </x-forms.form>
        </x-section>
    </main>
</x-layouts.app>
