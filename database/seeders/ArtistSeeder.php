<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        $allArtists = [];

        foreach ($comics as $item) {
            foreach ($item['artists'] as $artist) {
                if(!in_array($artist, $allArtists)) {
                    $allArtists[] = $artist;
                    $newArtist = new Artist();
                    $newArtist->name = $artist;
                    $newArtist->save();
                }
            }
        }
    }
}
