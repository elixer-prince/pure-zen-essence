<x-layouts.normal>
  <x-slot name="pageTitle">Pure Zen Essence | Beauty By Nature</x-slot>
  {{-- TODO: Add a description --}}
  <x-slot name="pageDescription">...</x-slot>

  <x-section id="about" class="relative flex-row gap-16 bg-black pt-34 text-white" aria-labelledby="about-header">
    <x-about-image />

    <div class="flex flex-2 flex-col items-center">
      <x-section-heading id="about-header">About Us</x-section-heading>

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
  </x-section>

  <x-section id="products" aria-labelledby="products-header">
    <x-section-heading id="products-header" class="border-b-brand-green-500">Our Products</x-section-heading>

    <x-grid>
      <x-product-card title="Coconut Oil">This is the [Coconut Oil] product description...</x-product-card>
      <x-product-card title="Castor-Coconut Oil">
        This is the [Castor-Coconut Oil] product description...
      </x-product-card>
      <x-product-card title="Cold-Pressed Castor oil">This is the [Coconut Oil] product description...</x-product-card>
      <x-product-card title="Beard Oil">This is the [Beard Oil] product description...</x-product-card>
    </x-grid>
  </x-section>

  <x-section id="testimonials" class="border-2 border-y-amber-500" aria-labelledby="testimonials-header">
    <x-section-header id="testimonials-header">Testimonials</x-section-header>
  </x-section>

  <x-section id="faqs" aria-labelledby="faqs-header">
    <x-section-heading id="faqs-header">FAQs</x-section-heading>
  </x-section>
</x-layouts.normal>
