@props(['to'])

<a
    href="{{ $to }}"
    class="
        cursor-pointer
        px-2
        mx-2
        text-beige
        hover:text-gray-200 hover:underline
    "
>
    {{ $slot }}
</a>
