<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        $categories = [
            [
                'name' => 'プログラミング',
                'thumbnail' => 'programming.png',
                'sort' => 1
            ],
            [
                'name' => '音楽',
                'thumbnail' => 'music.png',
                'sort' => 2
            ],
            [
                'name' => '歴史',
                'thumbnail' => 'history.png',
                'sort' => 3
            ],
            [
                'name' => 'ビジネス',
                'thumbnail' => 'business.png',
                'sort' => 4
            ],
            [
                'name' => 'ぽよちゃんたち',
                'thumbnail' => 'poyo.png',
                'sort' => 5
            ],
        ];

        foreach($categories as $categoy) {
            Category::create($categoy);
        }
    }
}
