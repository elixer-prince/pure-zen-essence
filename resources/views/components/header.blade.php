<header class="mt-[var(--navbar-height)] h-screen items-center border border-amber-500 p-4">
  <x-navbar />

  <div class="flex flex-col items-center gap-8 border border-red-500 text-center">
    <div class="flex flex-col items-center gap-8">
      <h1 class="border text-5xl font-bold">Do you want effortless beauty?</h1>
      <p class="text-2xl">
        Find your natural essence with
        <span class="hover:text-brand-green-500 transition-colors duration-500">Pure Zen Essence!</span>
      </p>
    </div>

    <div class="flex items-center gap-4">
      <x-button class="bg-black hover:bg-black/95" href="#about">Learn More</x-button>
      <x-button class="bg-brand-green-500 hover:bg-brand-green-600" href="#contact">Contact Us</x-button>
    </div>
  </div>
</header>
