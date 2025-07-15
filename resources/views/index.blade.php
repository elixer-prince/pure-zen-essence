<x-layouts.normal>
  <x-slot name="pageTitle">Pure Zen Essence | Beauty By Nature</x-slot>
  {{-- TODO: Add a description --}}
  <x-slot name="pageDescription">...</x-slot>

  <section
    id="about"
    class="relative flex scroll-mt-[var(--navbar-height)] items-center justify-center gap-16 bg-black px-8 pt-34 pb-12 text-white sm:px-12 lg:py-16"
    aria-labelledby="about-header"
  >
    <div
      class="absolute top-0 left-1/2 flex aspect-square h-48 flex-1 -translate-x-1/2 -translate-y-1/2 overflow-hidden rounded-full border-3 transition-all duration-500 lg:static lg:h-full lg:translate-x-0 lg:-translate-y-0"
    >
      <img class="h-full w-full hover:scale-105" src="" alt="Owners Image" />
    </div>

    <div class="flex flex-2 flex-col items-center">
      <header>
        <h2
          id="about-header"
          class="border-brand-blue-500 mb-8 w-fit rounded-lg border-b-8 pb-2 text-center text-4xl font-bold"
        >
          About Us
        </h2>
      </header>

      <div class="flex flex-col items-center gap-8">
        <x-about-card heading="Our Vision">
          Our vision is to be a trusted family business that nurtures enduring relationships, champions sustainable
          farming practices, and makes a meaningful impact on both our community and the environment.
        </x-about-card>
        <x-about-card heading="Our Mission">
          As a family-owned business, we are committed to cultivating high-quality products with care, integrity, and
          profound respect for the land. Through our hard work and shared values, we strive to nourish our community
          while safeguarding our legacy for future generations.
        </x-about-card>
      </div>
    </div>
  </section>
</x-layouts.normal>
