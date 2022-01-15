<x-layout>
    <form
        method="POST"
        class="w-1/2 mx-auto bg-gray-100 rounded-xl px-4 py-12 mt-12"
        action="/login"
    >
        @csrf
        <label class="block py-4 text-gray-800 text-lg font-medium"
            >Username</label
        >
        <input
            class="block px-4 py-2 w-full border rounded italic"
            name="username"
            placeholder="enter an username"
            required
        />
        <label class="block py-4 text-gray-800 text-lg font-medium"
            >Password</label
        >
        <input
            class="block px-4 py-2 w-full border rounded italic"
            placeholder="enter a password"
            name="password"
            type="password"
            required
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
            submit
        </button>
    </form>
</x-layout>
