<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class InitialPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
            [
                'title'         => 'Welcome to CineReview!',
                'slug'          => 'welcome-to-cinereview',
                'thumbnail'     => 'cinereview.png',
                'content'       => 'Kami adalah platform blog yang berdedikasi untuk menyajikan 
                                    konten-konten menarik dan informatif seputar film, series, dan produksi sinema Indonesia maupun mancanegara. 
                                    Tujuan kami adalah untuk menjadi sumber inspirasi dan pengetahuan bagi para pembaca, 
                                    serta wadah bagi para penulis untuk berbagi ide dan gagasan mereka.
                                    CineReview adalah wadah bagi para pecinta film dari seluruh penjuru untuk berkumpul dan berbagi passion mereka. 
                                    Kami percaya bahwa diskusi yang hidup dan interaktif adalah kunci untuk memahami dan menikmati film 
                                    secara lebih mendalam. Mari bergabung dalam komunitas kami, di mana setiap suara memiliki tempatnya!',
                'status'        => '1',
                'user_id'       => 1,
                'category_id'   => 1,
            ],
        ];
        
        foreach ($articles as $key => $value) {
            Article::create($value);
        }
    }
}
