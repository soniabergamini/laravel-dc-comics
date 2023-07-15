@extends('layouts.app')
@section('page-title', $comic->serie)
@section('content')

<!-- Main Contents -->
<main class="w-full mx-auto">
    <div class="h-16 bg-primaryBlu w-full mx-auto"></div>

    <!-- Comic Main Details -->
    <section class="flex items-center flex-col mb-14">
        <div class="max-w-5xl w-full">

            <!-- Cover -->
            <img src="{{ url($comic['thumb']) }}" alt="cover-img" class="object-cover h-[230px] w-[150px] object-top mt-[-250px] border border-white mb-20">

            <!-- Edit/Delete Buttons -->
            <div class="text-center flex justify-end d-inline items-center">
                <div class="bg-primaryBlu mt-[-130px] border-primaryBlu border-8">
                    <button onclick="window.location=`{{ route('comics.edit', $comic) }}`" class="bg-white font-bold text-sm py-2 px-10 hover:animate-bounce cursor-pointer"><i class="fa-solid fa-pen mr-2"></i>EDIT</button>
                </div>
                <form action="{{ route('comics.destroy', $comic) }}" method="post" class="d-inline mt-[-130px] border-8 border-primaryBlu bg-primaryBlu text-red-600 relative">
                    @csrf
                    @method('DELETE')
                    <input type="submit" name="delBtn" value="DELETE" class="text-sm font-bold px-8 tracking-wide bg-white text-decoration-underline py-2 cursor-pointer hover:text-white hover:animate-bounce hover:bg-red-600">
                </form>
            </div>

            <!-- Main Info -->
            <div class="bg-white flex justify-between gap-10">
                <div class="flex-grow  max-w-[70%]">

                    <!-- Title -->
                    <h2 class="text-3xl text-[#005C86] font-bold mb-6">{{ Str::upper($comic['title']) }}</h2>

                    <!-- Price -->
                    <div class="bg-[#55BA58] h-9 border-b-2 border-gray-500 mb-4 flex text-sm font-medium text-[#B3F586]">
                        <div class="w-[70%] flex justify-between px-5 py-1.5 border-r border-gray-500">
                            <p>U.S. PRICE: <span class="text-white">${{$comic['price']}}</span> </p>
                            <p>AVAILABLE</p>
                        </div>
                        <div class="w-[30%] text-white text-center py-1.5 border-l border-gray-500">
                            <a href="#">Check Availability <i class="fa-solid fa-caret-down fa-sm"></i></a>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="text-gray-500 text-sm">{{ $comic['description']}}</p>

                </div>

                <!-- Advertisement -->
                <div>
                    <h3 class="text-black text-right font-medium">ADVERTISEMENT</h3>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="adv-img"/>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Comic Additional Info -->
    <section class="flex items-center flex-col bg-[#F6F6F6]">
        <div class="max-w-5xl w-full flex gap-5 py-6 mb-20">

            <!-- Talent -->
            <div class="w-[50%] text-[#005C86]">
                <h3 class="text-2xl font-medium mb-6">Talent</h3>
                <div class="border-y items-center flex justify-between py-2">
                    <h4 class="font-medium">Art by:</h4>
                    <p class="w-[75%] text-sm text-primaryBlu">{{ $comic->artists->pluck('name')->implode(', ') }}</p>
                </div>
                <div class="border-b items-center flex justify-between py-2">
                    <h4 class="font-medium">Written by:</h4>
                    <p class="w-[75%] text-sm text-primaryBlu">{{ collect($comic['writers'])->implode(', ') }}</p>
                </div>
            </div>


            <!-- Specs -->
            <div class="w-[50%] text-[#005C86]">
                <h3 class="text-2xl font-medium mb-6">Specs</h3>
                <div class="border-y items-center flex justify-between py-2">
                    <h4 class="font-medium">Series:</h4>
                    <p class="w-[75%] text-sm text-primaryBlu">{{ Str::upper($comic['series']) }}</p>
                </div>
                <div class="border-b items-center flex justify-between py-2">
                    <h4 class="font-medium">U.S. Price:</h4>
                    <p class="w-[75%] text-sm text-black">${{ $comic['price'] }}</p>
                </div>
                <div class="border-b items-center flex justify-between py-2">
                    <h4 class="font-medium">On Sale Date:</h4>
                    <p class="w-[75%] text-sm text-black">{{ $comic['sale_date'] }}</p>
                </div>
            </div>

        </div>
    </section>

    @include('partials.mainbanner')

</main>
<script>
    var comic = {{ Js::from($comic['serie']) }};
    localStorage.setItem('comic_click', comic);
</script>


@endsection
