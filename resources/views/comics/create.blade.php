@extends('layouts.app')

@section('content')

<!-- Main Contents -->
<main class="text-white">

    <div class="bg-secondaryBlack w-full my-0 mx-auto flex items-center flex-col">
        <section id="slideSec" class="max-w-5xl w-full p-[0.5em]">

            <!-- Create New Comic Section -->
            <button class="bg-primaryBlu font-bold py-[0.5em] px-[1em] relative">CREATE NEW COMIC</button>

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

            <!-- Form Add New Comic -->
            <form action="{{ route('comics.store') }}" method="post">
                @csrf

                <!-- Comic Title -->
                <label class="font-bold">Title</label>
                <input placeholder="Batman" class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{ old("title") }}">
                @error("title")
                    <div class="invalid-feedback">{{$message}}</div>
                @endif

                <!-- Comic Description -->
                <label class="font-bold">Description</label>
                <textarea placeholder="The Joker is dead, Bruce Wayne is behind bars..." name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="5">{{ old("description") }}</textarea>
                @error("description")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <!-- Comic Thumb -->
                <label class="font-bold">Thumb</label>
                <input placeholder="Copy the image url here..." class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb" value="{{ old("thumb") }}">
                @error("thumb")
                    <div class="invalid-feedback">{{$message}}</div>
                @endif

                <!-- Comic Price -->
                <label class="font-bold">Price</label>
                <input placeholder="16.99" class="form-control @error('price') is-invalid @enderror" type="text" name="price" value="{{ old("price") }}">
                @error("price")
                    <div class="invalid-feedback">{{$message}}</div>
                @endif

                <!-- Comic Series -->
                <label class="font-bold">Series</label>
                <input placeholder="Batman: White Knight Presents: Harley Quinn" class="form-control @error('series') is-invalid @enderror" type="text" name="series" value="{{ old("series") }}">
                @error("series")
                    <div class="invalid-feedback">{{$message}}</div>
                @endif

                <!-- Comic Type -->
                <label class="font-bold">Type</label>
                <select class="form-control @error('type') is-invalid @enderror" name="type">
                    <option value="" @selected(!old('type')) disabled hidden>Select Type</option>
                    @foreach ($types as $item)
                        <option @selected(old('type') === $item->type) value="{{ $item->type }}">{{ $item->type }}</option>
                    @endforeach
                </select>
                @error("type")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <!-- Comic Sale Date -->
                <label class="font-bold">Sale Date</label>
                <input class="form-control @error('sale_date') is-invalid @enderror" type="date" name="sale_date" value="{{ old("sale_date") }}">
                @error("sale_date")
                    <div class="invalid-feedback">{{$message}}</div>
                @endif

                <!-- Submit Button -->
                <div class="flex justify-center">
                    <input class="bg-primaryBlu font-bold text-sm py-2 px-12 mt-2 mb-4 hover:text-black hover:bg-white cursor-pointer" type="submit" value="ADD">
                </div>

             </form>

        </section>
    </div>
</main>
@endsection
