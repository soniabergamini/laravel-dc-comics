@extends('layouts.app')

@section('content')

<!-- Main Contents -->
<main class="text-white">

    <div class="bg-secondaryBlack w-full my-0 mx-auto flex items-center flex-col">
        <section id="slideSec" class="max-w-5xl w-full p-[0.5em]">

            <!-- Edit Comic Section -->
            <button class="bg-primaryBlu font-bold py-[0.5em] px-[1em] relative">EDIT {{ Str::upper($comic['series']) }}</button>

            <!-- Form Error Section -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Form Edit Comic -->
            <form action="{{ route('comics.update', $comic) }}" method="post">
                @csrf
                @method('PUT')

                <!-- Comic Title -->
                <label class="font-bold">Title</label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{ old("title") ?? $comic->title }}">
                @error("title")
                    <div class="invalid-feedback">{{$message}}</div>
                @endif

                <!-- Comic Description -->
                <label class="font-bold">Description</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="5">{{ old("description") ?? $comic->description }}</textarea>
                @error("description")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <!-- Comic Thumb -->
                <label class="font-bold">Thumb</label>
                <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb" value="{{ old("thumb") ?? $comic->thumb }}">
                @error("thumb")
                    <div class="invalid-feedback">{{$message}}</div>
                @endif

                <!-- Comic Price -->
                <label class="font-bold">Price</label>
                <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" value="{{ old("price") ?? $comic->price }}">
                @error("price")
                    <div class="invalid-feedback">{{$message}}</div>
                @endif

                <!-- Comic Series -->
                <label class="font-bold">Series</label>
                <input class="form-control @error('series') is-invalid @enderror" type="text" name="series" value="{{ old("series") ?? $comic->series }}">
                @error("series")
                    <div class="invalid-feedback">{{$message}}</div>
                @endif

                <!-- Comic Type -->
                <label class="font-bold">Type</label>
                <select class="form-control @error('type') is-invalid @enderror" name="type">
                    <option value="" hidden @selected(!old('type')) disabled>Select Type</option>
                    <option @selected(old('type', $comic) == 'comic book') value="comic book">Comic Book</option>
                    <option @selected(old('type', $comic) == 'graphic novel') value="graphic novel">Graphic Novel</option>
                </select>
                @error("type")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <!-- Comic Sale Date -->
                <label class="font-bold">Sale Date</label>
                <input class="form-control @error('sale_date') is-invalid @enderror" type="date" name="sale_date" value="{{ old("sale_date") ?? $comic->sale_date }}">
                @error("sale_date")
                    <div class="invalid-feedback">{{$message}}</div>
                @endif

                <!-- Submit Button -->
                <div class="flex justify-center">
                    <input class="bg-primaryBlu font-bold text-sm py-2 px-12 mt-2 mb-4 hover:text-black hover:bg-white cursor-pointer" type="submit" value="SAVE">
                </div>

             </form>

        </section>
    </div>

    @include('partials.mainbanner')

</main>
@endsection
