<details class="rounded-full open:rounded-xl group/faq bg-white">
    <summary
        class="bg-brand-blue-500 flex items-center gap-4 list-none group-open/faq:rounded-b-none group-open/faq:rounded-xl cursor-pointer rounded-full px-6 py-4 font-bold text-white">
        <span class="text-2xl group-open/faq:rotate-90 transition-transform duration-500">
            <i class="fa-regular fa-square-caret-right"></i>
        </span>

        {{ $question }}
    </summary>

    <p class="px-8 ml-6 text-neutral-500 font-bold py-4">
        {{ $answer }}
    </p>
</details>

<!-- TODO: Add a circle arrow icon instead of this square one -->
<!-- TODO: Research how to make it transition smoothly! -->
