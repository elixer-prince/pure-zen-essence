<article class="h-90 w-full perspective-midrange md:w-90">
  <div class="group h-full transition-transform duration-500 transform-3d">
    <div
      class="border-brand-darkblue-950/50 absolute h-full w-full overflow-hidden rounded-tl-4xl rounded-br-4xl border-2 bg-white backface-hidden"
    >
      <div class="h-1/2 overflow-hidden">
        <img
          class="h-full w-full bg-neutral-700 object-cover transition-transform duration-500 group-hover:scale-110"
          src="{{ asset('images/placeholder-image.svg') }}"
          alt="Product Image"
        />
      </div>
      <div class="p-4">
        <div>
          <h3 class="mb-3 text-2xl font-bold">{{ $title }}</h3>
          <p class="mb-5 text-black/75">{{ $description }}</p>
        </div>
        <x-button class="bg-neutral-950 text-sm text-neutral-50 hover:bg-neutral-800" type="button">More Info</x-button>
      </div>
    </div>

    <div class="absolute h-full w-full rotate-y-180 bg-neutral-500 backface-hidden">Card Back</div>
  </div>
</article>
