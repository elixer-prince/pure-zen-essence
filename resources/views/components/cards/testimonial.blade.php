<div
    class="relative mt-12 flex rounded-lg border-2 border-neutral-500 bg-neutral-50 p-8 pt-18 transition-all duration-500 hover:-translate-y-1.5"
>
    <div
        class="absolute top-0 left-1/2 aspect-square h-28 -translate-x-1/2 -translate-y-1/2 overflow-hidden rounded-full border-4 border-white transition-transform duration-500 hover:scale-105 hover:rotate-360"
    >
        <img
            class="h-full w-full"
            src="https://picsum.photos/seed/{{ rand(1, 1000000) }}/300/300"
            alt="Testimonial Image"
        />
    </div>

    <div>
        <h3 class="mb-4 text-2xl font-bold">Testimonial Title</h3>
        <p class="text-black/75">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam
            beatae dolore explicabo iusto excepturi veritatis dolorum,
            aspernatur consectetur debitis nihil fugit aut molestiae tenetur
            ducimus soluta repellat vero qui nemo.
        </p>
    </div>
</div>

<!-- TODO: Improve the card styling -->
<!-- TODO: maybe make a class that stores testimonials, although that would be extra work! -->
