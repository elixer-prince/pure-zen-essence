<nav class="flex items-center justify-between bg-black p-4 font-bold text-white select-none">
  <div class="flex items-center gap-8">
    <a class="flex items-center gap-2" href="/">
      <img class="w-12 animate-bounce" src="{{ asset('images/brand-icon.png') }}" alt="Brand Icon" />
      <span class="hidden text-2xl transition-transform duration-500 hover:-translate-y-0.5 sm:flex">
        Pure Zen Essence
      </span>
    </a>

    <div class="hidden items-center overflow-hidden rounded-md border-2 lg:flex">
      <x-navbar-link href="#">HOME</x-navbar-link>
      <x-navbar-link href="#about">ABOUT US</x-navbar-link>
      <x-navbar-link href="#products">OUR PRODUCTS</x-navbar-link>
      <x-navbar-link href="#testimonials">TESTIMONIALS</x-navbar-link>
      <x-navbar-link href="#faqs">FAQs</x-navbar-link>
    </div>
  </div>

  <div class="flex items-center gap-4">
    <a class="transition-colors duration-300 hover:text-white/75" href="/login">Login</a>
    <a
      class="bg-brand-green-500 hover:bg-brand-green-600 flex items-center gap-2 rounded-md px-4 py-2 transition-colors duration-500"
      href="/signup"
    >
      <i class="fa-solid fa-user"></i>
      Sign Up
    </a>
  </div>
</nav>
