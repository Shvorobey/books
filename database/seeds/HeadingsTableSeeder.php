<?php

use Illuminate\Database\Seeder;

class HeadingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Heading::create([
            'title' => 'Fantasy',
            'key' => 'fantasy',
        ]);
        \App\Heading::create([
            'title' => 'Drama',
            'key' => 'drama',
        ]);
        \App\Heading::create([
            'title' => 'Story',
            'key' => 'story',
        ]);
        \App\Heading::create([
            'title' => 'Detektiv',
            'key' => 'detektiv',
        ]);
        \App\Heading::create([
            'title' => 'Poems',
            'key' => 'poems',
        ]);
        \App\Heading::create([
            'title' => 'Historical',
            'key' => 'historical',
        ]);
    }
}
