<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\CiteSeeder;
use Database\Seeders\BarberSeeder;
use Database\Seeders\ClientSeeder;
use Database\Seeders\ServiceSeeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('barbers');
        Storage::makeDirectory('barbers');
        Storage::deleteDirectory('services');
        Storage::makeDirectory('services');

        User::factory()->create([
            'name' => 'Fernando Lobo',
            'email' => 'lobo@barberapp.com',
            'password' => Hash::make('admin')
        ]);

        $this->call(ClientSeeder::class);
        $this->call(BarberSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(CiteSeeder::class);
    }
}
