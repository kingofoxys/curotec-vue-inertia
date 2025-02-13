<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookCatalogsSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            DB::table('book_catalogs')->insert([
                'name' => $faker->sentence(3),
                'description' => $faker->text(150),
                'author' => $faker->name,
                'publisher' => $faker->company,
                'category' => $faker->word,
                'language' => $faker->languageCode,
                'cover_image' => $faker->url(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
