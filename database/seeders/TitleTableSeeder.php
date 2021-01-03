<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Title;

class TitleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Title::truncate();

        $titles =  [
            [
                'category_id' => 1,
                'title' => 'フロントエンドクイズ',
                'description' => 'フロントエンドにまつわるクイズです。',
                'thumbnail' => 'https://techblog.recochoku.jp/wp-content/uploads/2019/11/vue.png'
            ],
            [
                'category_id' => 2,
                'title' => 'ギタークイズ',
                'description' => 'ギターにまつわるクイズです。',
                'thumbnail' => 'https://i0.wp.com/guitar-hakase.com/wp-content/uploads/2018/08/history-guitars.jpg?fit=1100%2C539&ssl=1'
            ],
            [
                'category_id' => 3,
                'title' => 'サピエンス全史クイズ',
                'description' => '「サピエンス全史」に関するクイズです。',
                'thumbnail' => 'https://miro.medium.com/max/2560/1*1L6XXhNwVWFed1rpNeUQkw.jpeg'
            ],
            [
                'category_id' => 4,
                'title' => 'ビジネスパーソンの常識クイズ',
                'description' => '現在社会に生きるビジネスパーソンの常識に関するクイズです。',
                'thumbnail' => 'https://www.liber.co.jp/knowhow/column/img/column720.jpg'
            ],
            [
                'category_id' => 5,
                'title' => 'ぽよちゃんたちクイズ',
                'description' => 'ぽよちゃんたちに関するクイズです',
                'thumbnail' => 'https://images-na.ssl-images-amazon.com/images/I/51K8IdT44zL._AC_SX466_.jpg'
            ],
        ];

        foreach($titles as $title) {
            Title::create($title);
        }

    }
}
