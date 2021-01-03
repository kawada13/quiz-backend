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
                'thumbnail' => 'https://jp.techcrunch.com/wp-content/uploads/2016/05/codecode1.jpg?w=738',
                'sort' => 1
            ],
            [
                'name' => '音楽',
                'thumbnail' => 'https://storage.googleapis.com/ttrinity/_img/feature/44/feature_img_full_44.jpg',
                'sort' => 2
            ],
            [
                'name' => '歴史',
                'thumbnail' => 'https://rimage.gnst.jp/livejapan.com/public/article/detail/a/00/01/a0001292/img/basic/a0001292_main.jpg?20190104143943&q=80&rw=750&rh=536',
                'sort' => 3
            ],
            [
                'name' => 'ビジネス',
                'thumbnail' => 'https://orange-operation.jp/posrejihikaku/wp-content/uploads/2018/10/solution_20181122_01-1024x538.jpg',
                'sort' => 4
            ],
            [
                'name' => 'ぽよちゃんたち',
                'thumbnail' => 'https://www.tokyodisneyresort.jp/treasure/duffy/common/images/og.jpg',
                'sort' => 5
            ],
        ];

        foreach($categories as $categoy) {
            Category::create($categoy);
        }
    }
}
