<x-layout>
    <x-title
        >✨Here is your planning Suggestions for {{ $number }} days✨</x-title
    >
    <div class="pb-4 grid grid-cols-3 mx-auto mt-4">
        @foreach ($recipes as $recipe)
        <div
            class="
                border border-gray-100
                rounded-xl
                shadow
                w-9/12
                p-4
                mx-auto
                mb-4
            "
        >
            <img
                src="/storage/{{$recipe->thumbnail}}"
                class="rounded-xl mx-auto"
            />
            <button
                class="
                    border border-sky-400
                    px-6
                    rounded-full
                    py-1
                    uppercase
                    text-xs text-sky-400
                    my-4
                    font-light
                "
            >
                {{$recipe->category->name}}
            </button>
            <h2 class="text-center text-lg text-blue font-semibold">
                {{$recipe->name}}
            </h2>
            <p class="text-justify font-light italic px-1 text-gray-800">
                {{$recipe->description}}
            </p>
            <ul class="flex space-x-2 flex-wrap">
                @foreach ($recipe->ingredients as $ingredient)
                <li>
                    <button
                        class="
                            border border-stone-400
                            px-6
                            rounded-full
                            py-1
                            uppercase
                            text-xs text-stone-400
                            my-4
                            font-light
                        "
                    >
                        {{$ingredient->name}}
                    </button>
                </li>
                @endforeach
            </ul>
            <p class="px-1 text-sky-800 font-light italic">
                It took you {{$recipe->preparation_time}} minutes to prepare it!
            </p>
        </div>
        @endforeach
    </div>
</x-layout>
