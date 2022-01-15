<x-layout>
    <div class="flex">
        <div class="w-1/5 mx-auto py-4 px-16 pt-8">
            <p class="py-4 font-light">
                <i class="fas fa-list-ul px-1 text-sky-700"></i>Ingredients list
            </p>
            <ul>
                @foreach($ingredients as $ingredient)
                <a href="#">
                    <li
                        class="
                            border border-stone-400
                            px-4
                            rounded-full
                            py-1
                            text-xs text-stone-400
                            my-2
                            font-light
                            cursor-pinter
                            hover:bg-stone-400 hover:text-white
                        "
                    >
                        {{ $ingredient->name }}
                    </li>
                </a>
                @endforeach
                <a href="/ingredient">
                    <li
                        class="
                            hover:underline
                            px-2
                            py-1
                            text-xs text-sky-400
                            my-2
                            font-light
                            cursor-pinter
                        "
                    >
                        Add new ingredient
                    </li>
                </a>
            </ul>
            <p class="py-4 font-light">
                <i class="fas fa-shapes px-1 inline text-sky-800"></i>Categories
                list
            </p>
            <ul>
                @foreach($categories as $category)
                <a href="#">
                    <li
                        class="
                            border border-sky-400
                            px-4
                            rounded-full
                            py-1
                            text-xs text-sky-400
                            my-2
                            font-light
                            cursor-pinter
                            hover:bg-sky-400 hover:text-white
                        "
                    >
                        {{ $category->name }}
                    </li>
                </a>
                @endforeach
                <a href="/category">
                    <li
                        class="
                            hover:underline
                            px-2
                            py-1
                            text-xs text-stone-500
                            my-2
                            font-light
                            cursor-pinter
                        "
                    >
                        Add new category
                    </li>
                </a>
            </ul>
        </div>
        <div class="w-4/5 py-4 px-16">
            <x-title>Recipes List</x-title>
            <a href="/recipes/create">
                <button
                    class="
                        beige
                        px-6
                        rounded-full
                        py-1
                        uppercase
                        text-blue text-sm
                        hover:bg-stone-200
                        cursor-pinter
                        my-4
                        mx-auto
                        font-light
                    "
                >
                    Add new recipe
                </button>
            </a>
            <div class="pb-4 grid grid-cols-3 mx-auto mt-4">
                @foreach ($recipes as $recipe)
                <div
                    class="
                        border border-gray-100
                        rounded-xl
                        shadow
                        w-11/12
                        p-4
                        mx-auto
                        mb-4
                    "
                >
                    <form method="GET" action="recipes/edit/{{$recipe->id}}">
                        @csrf
                        <button
                            type="submit"
                            class="
                                border border-red-400
                                hover:border
                                hover:border-red-400
                                hover:text-red-400
                                hover:bg-transparent
                                px-4
                                rounded-full
                                py-1
                                text-xs
                                my-2
                                font-light
                                cursor-pinter
                                bg-red-400
                                text-white
                            "
                        >
                            Associate ingredient
                        </button>
                    </form>
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
                    <p
                        class="
                            text-justify
                            font-light
                            italic
                            px-1
                            text-gray-800
                        "
                    >
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
                        It took you {{$recipe->preparation_time}} minutes to
                        prepare it!
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
