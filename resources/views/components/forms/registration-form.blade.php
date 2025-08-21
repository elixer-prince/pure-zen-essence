<x-form
    class="border-t-brand-green-500 gap-12 rounded-3xl border-t-4 bg-black/75 px-12 py-18 text-neutral-50 backdrop-blur-xs transition-colors md:px-24 lg:px-28"
    action="/register"
    method="POST"
>
    <x-section-heading id="register-header">
        Create an Account
    </x-section-heading>

    {{-- Form Body --}}
    <div
        class="flex w-full flex-col gap-12 border-b-4 border-neutral-50/50 pb-12"
    >
        {{-- Form Fields Container --}}
        <div class="flex w-full flex-col gap-12">
            <x-form.field>
                <x-form.label for="first_name">
                    What's your first name?
                </x-form.label>
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
                <x-form.label for="last_name">
                    What's your last name?
                </x-form.label>
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
                <x-form.label for="email">What's your email?</x-form.label>
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
                <x-form.label for="password">
                    What password do you want?
                </x-form.label>
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
                    Confirm your password
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
        </div>

        <div
            class="text-lg-paragraph flex flex-col items-center justify-between gap-6 font-bold italic lg:flex-row"
        >
            <p>
                Have an Account?
                <a
                    class="underline underline-offset-4"
                    href="/login"
                    wire:navigate
                >
                    Log in!
                </a>
            </p>
        </div>
    </div>

    <x-button
        class="bg-brand-green-500 text-brand-green-50 hover:bg-brand-green-600"
        type="submit"
    >
        Register
        <i class="fa-solid fa-user"></i>
    </x-button>
</x-form>
