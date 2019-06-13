<?php

use Illuminate\Database\Seeder;

class SocialNetworkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\SocialNetwork::create([
            'url' => 'https://www.facebook.com',
            'name' => 'Мы в Facebook',
        ]);
        \App\SocialNetwork::create([
            'url' => 'https://twitter.com',
            'name' => 'Мы в Twitter',
        ]);
        \App\SocialNetwork::create([
            'url' => 'https://www.instagram.com',
            'name' => 'Мы в Instagram',
        ]);
    }
}
