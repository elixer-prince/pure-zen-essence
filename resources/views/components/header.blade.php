<header
  class="mt-[var(--navbar-height)] flex min-h-[calc(100dvh-var(--navbar-height))] items-center justify-center px-6 py-8 sm:px-12"
>
  <x-navbar />

  <div class="flex flex-col items-center gap-8 text-center">
    <div class="flex flex-col items-center gap-8">
      <h1 class="text-5xl font-bold">
        Do you want to be effortlessly
        <span class="bg-brand-green-500 bg-clip-text font-black text-transparent">BEAUTIFUL?</span>
      </h1>
      <p class="text-3xl font-semibold">
        Find your natural essence with
        <span class="hover:text-brand-green-500 font-black transition-colors duration-500">Pure Zen Essence!</span>
      </p>
    </div>

    <div class="flex items-center gap-4">
      <x-button class="bg-black hover:bg-black/95" href="#about">Learn More</x-button>
      <x-button class="bg-brand-green-500 hover:bg-brand-green-600" href="#contact">Contact Us</x-button>
    </div>
  </div>
</header>
