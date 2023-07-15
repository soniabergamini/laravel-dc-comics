<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Comic::truncate();
        Schema::enableForeignKeyConstraints();

        $comics = config('comics');

        foreach ($comics as $item) {
            $newComic = new Comic();
            $newComic->title = $item["title"];
            $newComic->description = $item["description"];
            $newComic->thumb = $item["thumb"];
            $newComic->price = $item["price"];
            $newComic->series = $item["series"];
            $newComic->sale_date = $item["sale_date"];
            $newComic->type = $item["type"];

            $comicArtistId = [];
            foreach ($item['artists'] as $icon) {
                $artistFilter = Artist::where('name', $icon)->get();
                $comicArtistId[] = $artistFilter[0]['id'];
            }
            $newComic->save();
            @dump(array_unique($comicArtistId));
            $newComic->artists()->sync(array_unique($comicArtistId));
        }
    }
}
