<x-layout>
    <x-title>Generate your planning</x-title>
    <form
        method="POST"
        action="/planner"
        enctype="multipart/form-data"
        class="w-1/2 mx-auto mt-8"
    >
        @csrf
        <label class="block py-4 text-gray-800 text-lg font-medium"
            >Enter the number of days:</label
        >
        <input
            name="days"
            class="block px-4 py-2 w-full border rounded"
            placeholder="enter the number of days"
        />
        <h3 class="py-2 text-red-400 font-semibold uppercase text-lg">
            Add Ingredient to your recipe:
        </h3>
        <label class="block py-4 text-gray-800 text-lg font-medium"
            >Ingredient name:</label
        >
        @foreach($ingredients as $ingredient)
        <input
            type="checkbox"
            name="ingredients[]"
            value="{{$ingredient->id}}"
            class="
                form-check-input
                appearance-none
                h-4
                w-4
                border border-gray-300
                rounded-sm
                bg-white
                checked:bg-red-500 checked:border-red-600
                focus:outline-none
                transition
                duration-200
                mt-1
                align-top
                bg-no-repeat bg-center bg-contain
                float-left
                mr-2
                cursor-pointer
            "
        />
        {{$ingredient->name}}<br />
        @endforeach
        <button
            type="submit"
            class="
                w-1/3
                py-2
                px-4
                rounded
                bg-sky-800
                my-6
                shadow
                text-white
                hover:bg-sky-900
            "
        >
            Submit
        </button>
    </form>
</x-layout>
