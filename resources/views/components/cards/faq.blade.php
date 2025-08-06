<details
    class="group/faq rounded-full rounded-l-none bg-white odd:mr-16 even:ml-16 even:bg-red-500 open:rounded-r-xl"
>
    <summary
        class="bg-brand-blue-500 flex cursor-pointer list-none items-center gap-4 rounded-full rounded-l-none px-6 py-4 font-bold text-white group-open/faq:rounded-r-xl group-open/faq:rounded-b-none"
    >
        <span
            class="text-2xl transition-transform duration-500 group-open/faq:rotate-90"
        >
            <i class="fa-regular fa-square-caret-right"></i>
        </span>

        {{ $question }}
    </summary>

    <p class="ml-6 px-8 py-4 font-bold text-neutral-500">
        {{ $answer }}
    </p>
</details>

<!-- TODO: Add a circle arrow icon instead of this square one -->
<!-- TODO: Research how to make it transition smoothly! -->
