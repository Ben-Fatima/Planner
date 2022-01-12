<x-layout>
    <x-title>Add new category</x-title>
    <form
        method="POST"
        action="/category"
        enctype="multipart/form-data"
        class="w-1/2 mx-auto mt-8"
    >
        @csrf
        <label class="block py-4 text-gray-800 text-lg font-medium"
            >Ingredient name:</label
        >
        <input
            name="name"
            class="block px-4 py-2 w-full border rounded"
            placeholder="enter the recipe name"
        />

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
