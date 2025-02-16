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
                'name' => 'Movies',
                'slug' => 'movies',
            ],
            [
                'name' => 'Series',
                'slug' => 'series',
            ],
        ];
        
        foreach ($categories as $key => $value) {
            Category::create($value);
        }

    }
}
