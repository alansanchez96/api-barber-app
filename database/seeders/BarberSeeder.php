<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Barber;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barber::factory(5)->create()
            ->each(function ($barber) {
                Image::factory(1)->create([
                    'url' => 'barbers/' . fake()->image('public/storage/barbers', 640, 480, null, false),
                    'imageable_id' => $barber->id,
                    'imageable_type' => Barber::class
                ]);
            });
    }
}
