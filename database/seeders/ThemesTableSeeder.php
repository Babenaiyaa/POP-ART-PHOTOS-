<?php

// database/seeders/ThemesTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThemesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('themes')->insert([
            [
                'name' => 'Neon jam',
                'description' => 'Let your life be a neon sign—impossible to ignore.',  
                'cover_image' => 'neon_jam.jpg',
            ],
            [
                'name' => 'Clip art',
                'description' => 'Life in simple shapes, filled with endless stories.',
                'cover_image' => 'clip_art.jpg', 
            ],
            [
                'name' => 'Autumn',
                'description' => 'Change can be beautiful.',
                'cover_image' => 'autumn.jpg',
            ],
            [
                'name' => 'Sea breeze',
                'description' => 'Peace is whre there is salt in the air and sand on the feet.',
                'cover_image' => 'sea_breeze.jpg', 
            ],
            [
                'name' => 'Starlight',
                'description' => 'Reminder of the magic in life.',
                'cover_image' => 'starlight.jpg', 
            ],
            [
                'name' => 'Love and War',
                'description' => 'In the chaos of war, love remains the quiet victory.',
                'cover_image' => 'love_and_war.jpg', 
            ],
            [
                'name' => 'Pastel paints',
                'description' => 'soft, calm, and full of possibilities.',
                'cover_image' => 'pastel_paints.jpg', 
            ],
            [
                'name' => 'Sweet n\' Sour',
                'description' => 'Sweet moments are made even richer by the sour ones.',
                'cover_image' => 'sweet_n_sour.jpg', 
            ],
            [
                'name' => 'Hello darling!',
                'description' => ' Dance through life, hand in hand.',
                'cover_image' => 'hello_darling.jpg',
            ],
            [
                'name' => 'Chill guy',
                'description' =>'Enjoy the Ride!',
                'cover_image' => 'chill_guy.jpg', 
            ],
            [
                'name' => 'When in Rome',
                'description' => 'Do as the Romans do – embrace the adventure.',
                'cover_image' => 'when_in_rome.jpg', 
            ],
            [
                'name' => 'Bits and pieces',
                'description' => 'Shatter, Shape',
                'cover_image' => 'bits_and_pieces.jpg', 
            ],
            [
                'name' => 'Moments between moments',
                'description' => 'Heartbeat of life or Essence of happiness.',
                'cover_image' => 'moments_between_moments.jpg', 
            ],
            [
                'name' => 'Goldies',
                'description' => 'Shines from within',
                'cover_image' => 'goldies.jpg', 
            ],
            [
                'name' => 'Vintage voyage',
                'description' => 'Charm of past',
                'cover_image' => 'vintage_voyage.jpg',
            ],
            [
                'name' => 'Vanilla?',
                'description' => 'World of flavors, choose...',
                'cover_image' => 'vanilla.jpg',
            ],
            [
                'name' => 'Kill me, Heal me.',
                'description' => 'Pain finds strength to heal.',
                'cover_image' => 'kill_me_heal_me.jpg',  // Replace with actual image file path
            ],
            [
                'name' => 'Oldschool',
                'description' => 'Some things never change',
                'cover_image' => 'old_school.jpg', 
            ],
            [
                'name' => 'Rainbow',
                'description' => ' where the colors collide.',
                'cover_image' => 'rainbow.jpg',
            ],
            [
                'name' => 'My palette',
                'description' => 'Life is a canvas, no shade is too bold.',
                'cover_image' => 'my_palette.jpg',
            ],
            [
                'name' => 'Summer strike',
                'description' => 'can not remember but will never forget',
                'cover_image' => 'summer_strike.jpg', 
            ],
        ]);
    }
}
