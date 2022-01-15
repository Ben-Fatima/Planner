<nav
    class="
        sticky
        shadow
        top-0
        z-10
        flex
        items-center
        justify-between
        blue
        w-full
        px-4
        py-2
    "
>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">
            <img src="/logo2.png" class="w-24" alt="logo planner" />
        </div>
        <x-navbar.link to="/recipes"> Recipes</x-navbar.link>
        @auth
        <x-navbar.link to="/planner"> Make a planning</x-navbar.link>
        <form method="POST" action="/logout">
            @csrf
            <button
                class="
                    bg-stone-100
                    px-6
                    rounded
                    py-1
                    uppercase
                    text-blue text-sm
                    hover:bg-stone-200
                    cursor-pinter
                    my-4
                    mx-auto
                    font-light
                "
                type="submit"
            >
                Logout<i class="fas fa-sign-out-alt p-1"></i>
            </button>
        </form>
        @endauth @guest
        <x-navbar.link to="/register">Register</x-navbar.link>
        <x-navbar.link to="/login">Log in</x-navbar.link>
        @endguest
    </div>
</nav>
