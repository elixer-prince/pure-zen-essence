<header
  class="mt-[var(--navbar-height)] flex min-h-[calc(100dvh-var(--navbar-height))] items-start justify-center px-4 pt-6"
>
  <x-navbar />

  <div class="flex flex-col items-center gap-8 text-center">
    <div class="flex flex-col items-center gap-8">
      <h1 class="text-4xl font-bold">
        Do you want to be EFFORTLESSLY
        <span class="bg-brand-green-500 bg-clip-text font-black text-transparent">BEAUTIFUL?</span>
      </h1>
      <p class="text-2xl font-semibold">
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
