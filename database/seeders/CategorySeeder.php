<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'News',
                'slug' => 'news',
            ],
            [
                'name' => 'Movies',
                'slug' => 'movies',
            ],
            [
                'name' => 'Series',
                'slug' => 'series',
            ],
            [
                'name' => 'Actors',
                'slug' => 'actors',
            ],
            [
                'name' => 'Director and Crews',
                'slug' => 'director-and-crews',
            ],
            [
                'name' => 'Cinematography',
                'slug' => 'cinematography',
            ],
            [
                'name' => 'Uncategorized',
                'slug' => 'uncategorized',
            ],
        ];
        
        foreach ($categories as $key => $value) {
            Category::create($value);
        }
    }
}
