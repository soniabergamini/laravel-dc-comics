<!-- Header Nav -->
<header>
    <!-- Top Banner -->
    <section class="w-full my-0 mx-auto bg-primaryBlu text-white flex justify-center">
        <div class="max-w-5xl w-full text-xs font-bold text-right py-1.5">
            <a href="#">DC POWER VISA<i class="fa-regular fa-copyright"></i></a>
            <a href="#" class="ml-10">ADDITIONAL DC SITES <i class="fa-solid fa-caret-down fa-xl"></i></a>
        </div>
    </section>

    <section class="bg-white my-0 mx-auto flex justify-center">
        <nav class="flex justify-between max-w-5xl w-full">

            <!-- DC Brand Logo -->
            <div class="p-[0.8em]">
                <a href="#">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo" class="max-w-[70%]">
                </a>
            </div>

            <!-- Nav Menu Links -->
            <div class="h-full">
                <ul class="flex gap-[1em] text-[0.5rem] md:text-xs h-full items-center">
                    @foreach ($elements['navItems'] as $item)
                        @if ($loop->last)
                            <li>
                                <a href="#" class="flex gap-2">{{ Str::upper($item) }} <i class="fa-solid fa-caret-down text-primaryBlu"></i></a>
                            </li>
                        @else
                            <li>
                                <a href="#">{{ Str::upper($item) }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>

            <!-- Search Bar -->
            <div class="flex items-center w-[15%] ml-4">
                <form class="border-b-primaryBlu border-b-2 flex justify-end max-w-full px-2">
                    <input type="search" name="search" class="text-black text-right ml-4 max-w-[85%] text-lg" placeholder="Search">
                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>

        </nav>
    </section>

    <!-- Hero Section -->
    <section class="w-full my-0 mx-auto">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="hero-img" class="max-h-96 w-full object-cover object-top">
    </section>
</header>
