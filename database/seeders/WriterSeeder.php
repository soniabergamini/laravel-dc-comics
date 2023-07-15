<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        $allWriters = [];

        foreach ($comics as $item) {
            foreach ($item['writers'] as $writer) {
                if (!in_array($writer, $allWriters)) {
                    $allWriters[] = $writer;
                    $newWriter = new Writer();
                    $newWriter->name = $writer;
                    $newWriter->save();
                }
            }
        }
    }
}
