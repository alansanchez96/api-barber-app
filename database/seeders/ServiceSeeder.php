<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::factory(10)->create()
            ->each(function ($service) {
                Image::factory(1)->create([
                    'url' => 'services/' . fake()->image('public/storage/services', 640, 480, null, false),
                    'imageable_id' => $service->id,
                    'imageable_type' => Service::class
                ]);
            });
    }
}
