<details
    class="group/faq bg-brand-blue-50 text-brand-blue-950 rounded-t-full rounded-b-full open:rounded-t-xl open:rounded-b-xl"
>
    <summary
        class="bg-brand-blue-500 text-brand-blue-50 flex cursor-pointer items-center gap-4 rounded-t-full rounded-b-full px-6 py-4 font-bold group-open/faq:rounded-t-xl group-open/faq:rounded-b-none"
    >
        <span
            class="text-2xl transition-transform duration-500 group-open/faq:rotate-90"
        >
            <i class="fa-regular fa-square-caret-right"></i>
        </span>
        {{ $question }}
    </summary>

    <p class="px-6 py-4 font-bold text-neutral-500">
        {{ $answer }}
    </p>
</details>

<!-- TODO: Add a circle arrow icon instead of this square one -->
<!-- TODO: Research how to make it transition smoothly! -->
