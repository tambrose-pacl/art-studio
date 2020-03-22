<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artworks')->insert([
            'firstName' => 'Tim',
            'lastName' => 'Ambrose',
            'year' => '2019',
            'pcg' => 'B7',
            'title' => 'Dusk till Dawn',
            'description' => 'Image showing passage of time',
            'image' => '/image/path',
            'collection_id' => '1'
        ]);

        DB::table('artworks')->insert([
            'firstName' => 'Tim',
            'lastName' => 'Ambrose',
            'year' => '2019',
            'pcg' => 'B7',
            'title' => 'Dusk till Dawn',
            'description' => 'Image showing passage of time',
            'image' => '/image/path',
            'collection_id' => '2'
        ]);
    }
}
