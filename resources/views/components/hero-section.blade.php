<header
  class="mt-[var(--navbar-height)] flex justify-center gap-16 px-8 pt-14 pb-38 sm:pt-24 md:px-16 lg:py-24 xl:py-32"
>
  <x-navbar />

  <div class="flex flex-[1.5] flex-col items-center gap-12 text-center">
    <div class="flex flex-col items-center gap-8">
      <h1 class="text-4xl font-bold uppercase xl:text-5xl">
        Have you ever wanted to be effortlessly
        <span class="bg-brand-green-500 bg-clip-text font-black text-transparent">beautiful</span>
      </h1>
      <p class="text-2xl">
        Find your natural essence with
        <span class="hover:text-brand-green-500 font-black transition-colors duration-500">Pure Zen Essence</span>
        <span class="font-black">!</span>
      </p>
    </div>

    <div class="flex items-center gap-4">
      <x-button
        class="border-2 border-neutral-950 text-neutral-950 hover:bg-neutral-950 hover:text-neutral-50"
        href="#about"
      >
        Learn More
        <span class="hidden sm:inline">
          <i class="fa-solid fa-arrow-down"></i>
        </span>
      </x-button>
      <x-button class="bg-brand-green-500 text-brand-green-50 hover:bg-brand-green-600" href="#contact">
        Contact Us
        <span class="hidden sm:inline">
          <i class="fa-solid fa-paper-plane"></i>
        </span>
      </x-button>
    </div>
  </div>

  <div class="hidden h-full flex-1 lg:block">Image of a beatiful woman...</div>
</header>
