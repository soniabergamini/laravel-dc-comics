@extends('layouts.app')

@section('content')
<main class="text-white">

    <!-- Main Contents -->
    <div class="bg-secondaryBlack w-full my-0 mx-auto flex items-center flex-col">
        <section id="slideSec" class="max-w-5xl w-full p-[0.5em]">

            <!-- Current Series Section -->
            <button class="bg-primaryBlu font-bold py-[0.5em] px-[1em] relative">CURRENT SERIES</button>
            <!-- Current Series Slides  -->
            <section class="w-full flex items-center flex-wrap justify-around gap-[1em] mb-4">
                @foreach ($comics as $item)
                    <div
                        class="w-[calc(100%/3-1rem)] md:w-[calc(100%/4-1rem)] lg:w-[calc(100%/6-1rem)] flex items-center flex-col gap-y-2.5 pad-[0.5em] h-48 cursor-pointer text-left">
                        <a href="{{ route("comics.show", $item->id) }}" >
                            <img src="{{ url($item['thumb']) }}" alt="cover-img" class="object-cover h-[150px] w-[150px] object-top">
                        </a>
                        <span class="text-[0.625rem]" onclick="window.location=`{{ route('comics.show', $item->id) }}`">{{ Str::upper($item['series']) }}</span>
                    </div>
                @endforeach
            </section>
            <div class="w-full text-center">
                <button class="bg-primaryBlu font-bold text-xs py-2 px-12 my-4 hover:text-black hover:bg-white">LOAD MORE</button>
            </div>

        </section>
    </div>

    @include('partials/mainbanner')

</main>
@endsection
