<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\About;
use App\Models\Carousel;
use App\Models\News;
use App\Models\Pictures;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        News::factory(8)->create();
        // User::factory(2)->create();
        Pictures::factory(12)->create();
        Carousel::factory(2)->create();
        About::factory(1)->create();

        User::factory()->create([
            'name' => 'Albberr',
            'email' => 'test@example.com',
            'password' => bcrypt('password')
        ]);
    }
}
