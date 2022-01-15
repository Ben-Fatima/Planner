<x-layout>
    <h1
        class="
            w-1/2
            mx-auto
            text-5xl text-red-400
            font-black
            leading-relaxed
            montserrat
            py-4
        "
    >
        Need suggestions for healthy meals tailored to you? <br />
        Register now for free!!
    </h1>
    <form
        method="POST"
        class="w-1/2 mx-auto bg-gray-100 rounded-xl px-4 py-12"
        action="/register"
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
