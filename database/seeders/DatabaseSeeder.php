<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Blog;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'toto',
            'email' => 'toto@toto.fr',
        ]);

        Blog::factory(10)->create();
    }
}
