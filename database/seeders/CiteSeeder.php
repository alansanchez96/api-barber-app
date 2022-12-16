<?php

namespace Database\Seeders;

use App\Models\Cite;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cite::factory(5)->create()
            ->each(function ($cite) {
                $cite->services()->sync(Service::all()->random()->id);
            });
    }
}
