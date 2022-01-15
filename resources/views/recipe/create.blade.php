<x-layout>
    <x-title>Add new recipe</x-title>
    <form
        method="POST"
        action="/recipes/create"
        enctype="multipart/form-data"
        class="w-1/2 mx-auto mt-8"
    >
        @csrf
        <label class="block py-4 text-gray-800 text-lg font-medium"
            >Recipe name:</label
        >
        <input
            name="name"
            class="block px-4 py-2 w-full border rounded"
            placeholder="enter the recipe name"
        />
        <label class="block py-4 text-gray-800 text-lg font-medium"
            >Recipe description:</label
        >
        <textarea
            name="description"
            class="block px-4 py-2 w-full border rounded"
            placeholder="enter the recipe description"
        ></textarea>
        <label class="block py-4 text-gray-800 text-lg font-medium">
            Recipe thumbnail:
        </label>
        <input
            name="thumbnail"
            class="block px-4 py-2 w-full border rounded"
            type="file"
        />
        <label class="block py-4 text-gray-800 text-lg font-medium"
            >Recipe preparation time (minutes):</label
        >
        <input
            name="preparation_time"
            class="block px-4 py-2 w-full border rounded"
            placeholder="enter preparation time"
        />
        <label class="block py-4 text-gray-800 text-lg font-medium"
            >Recipe category:</label
        >
        <select
            name="category_id"
            class="block w-full px-4 py-2 border rounded"
        >
            <option>Choose an option</option>
            @foreach ($categories as $category)

            <option>{{ $category->name }}</option>
            @endforeach
        </select>
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
