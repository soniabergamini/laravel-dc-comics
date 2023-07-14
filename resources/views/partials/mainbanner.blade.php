<!-- Main Banner -->
<div  id="comicsMainBanner" class="bg-primaryBlu w-full my-0 mx-auto flex items-center flex-col">
    <section class="max-w-5xl w-full h-32 items-center flex">
        <ul class="flex justify-evenly items-center w-full">
            @foreach ($elements['dcAssets'] as $item)
                <li class="flex justify-center h-20">
                    <a href="#" class="lg:flex-row">
                        <img src="{{ Vite::asset("resources/img/".$item['path']) }}" alt="{{$item['alt']}}">
                        <span class="min-w-fit text-[0.625rem] md:text-xs">{{ Str::upper($item['text']) }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
</div>
