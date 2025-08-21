<x-forms.auth-form
    class="border-t-brand-green-500 gap-12 rounded-3xl border-t-4 bg-black/75 px-12 py-18 text-neutral-50 backdrop-blur-xs transition-colors md:px-24 lg:px-28"
    action="/login"
    method="POST"
>
    <x-section-heading id="login-header">
        <span class="md:hidden">
            Hey,
            <br />
        </span>
        <span class="hidden md:inline-block">Hi again,</span>
        lovely.
    </x-section-heading>

    {{-- Form Body --}}
    <div class="flex w-full flex-col items-center gap-12 lg:items-end">
        <div
            class="flex w-full flex-col gap-12 border-b-4 border-neutral-50/50 pb-12"
        >
            {{-- Form Fields Container --}}
            <div class="flex w-full flex-col gap-12">
                <x-forms.auth-form.field>
                    <x-forms.auth-form.label
                        class="text-lg-paragraph"
                        for="email"
                    >
                        What's your email?
                    </x-forms.auth-form.label>
                    <x-forms.auth-form.input
                        id="email"
                        class="placeholder:text-lg-paragraph text-lg-paragraph placeholder:text-neutral-50/70"
                        type="email"
                        name="email"
                        placeholder="john.doe@example.com"
                        value="{{ old('email') }}"
                        required
                    />

                    <x-forms.auth-form.error-message for="validation" />
                </x-forms.auth-form.field>

                <x-forms.auth-form.field>
                    <x-forms.auth-form.label
                        class="text-lg-paragraph"
                        for="password"
                    >
                        What's your password?
                    </x-forms.auth-form.label>
                    <x-forms.auth-form.input
                        id="password"
                        class="placeholder:text-lg-paragraph text-lg-paragraph"
                        type="password"
                        name="password"
                        placeholder="Enter password"
                        required
                    />
                </x-forms.auth-form.field>
            </div>

            <div
                class="text-lg-paragraph flex flex-col items-center justify-between gap-6 font-bold italic lg:flex-row"
            >
                <p>
                    No account?
                    <a
                        class="underline underline-offset-4"
                        href="/register"
                        wire:navigate
                    >
                        Make one!
                    </a>
                </p>
                <p>
                    Forgot your password?
                    <a
                        class="underline underline-offset-4"
                        href="/"
                        wire:navigate
                    >
                        Reset it!
                    </a>
                </p>
            </div>
        </div>

        <x-button
            class="bg-brand-green-500 text-lg-paragraph! text-brand-green-50"
            type="submit"
        >
            <i class="fa-solid fa-user"></i>
            Login
        </x-button>
    </div>
</x-forms.auth-form>
