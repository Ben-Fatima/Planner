<x-layout>
    <x-title
        >Associate ingredient to
        <p class="text-red-400 inline">{{$recipe->name}}</p></x-title
    >
    <form
        method="POST"
        action="/recipes/edit/{{$recipe->id}}"
        class="w-1/2 mx-auto mt-8"
    >
        @csrf
        <label class="block py-4 text-gray-800 text-lg font-medium"
            >Select ingredient:</label
        >
        <select name="ingredient" class="block w-full px-4 py-2 border rounded">
            <option>Choose an option</option>
            @foreach ($ingredients as $ingredient)
            <option>{{ $ingredient->name }}</option>
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
            Add
        </button>
    </form>
    <table class="w-1/2 mx-auto mt-4 mb-4">
        <thead class="">
            <tr>
                <th
                    class="
                        px-5
                        py-3
                        border-b-2 border-gray-200
                        bg-stone-100
                        text-left text-sm
                        font-semibold
                        text-gray-600
                        tracking-wider
                        uppercase
                    "
                >
                    name
                </th>
                <th
                    class="
                        px-5
                        py-3
                        border-b-2 border-gray-200
                        bg-stone-100
                        text-left text-sm
                        font-semibold
                        text-gray-600
                        tracking-wider
                        uppercase
                    "
                >
                    Number of calories
                </th>
                <th
                    class="
                        px-5
                        py-3
                        border-b-2 border-gray-200
                        bg-stone-100
                        text-left text-sm
                        font-semibold
                        text-gray-600
                        tracking-wider
                        uppercase
                    "
                >
                    Delete
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($recipe->ingredients as $ingredient)
            <tr>
                <td class="p-5 border-b border-gray-200">
                    {{$ingredient->name}}
                </td>
                <td class="p-5 border-b border-gray-200">
                    {{$ingredient->calories}}
                </td>
                <td class="p-5 border-b border-gray-200">
                    <form
                        method="POST"
                        action="/recipes/edit/{{$recipe->id}}/{{$ingredient->id}}"
                    >
                        @method('DELETE') @csrf
                        <button
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
                            type="submit"
                        >
                            <i class="fas fa-trash px-1"></i>Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
