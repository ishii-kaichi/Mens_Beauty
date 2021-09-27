<?php

use Illuminate\Database\Seeder;
use App\Salon;
use App\SalonCategory;

class SalonBodyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Salon::create([
            'name'=>'ゴリラクリニック　新宿本院',
            'body'=>'<p>最寄駅は、地下鉄「新宿三丁目駅」A1出口とJR「新宿駅」東南口で、どちらの出口からも2〜4分程の通いやすい立地となっております。<br>日本有数のターミナル駅である新宿にあり、お仕事後でもお出かけの際でも、お気軽にご来院ください。</p>',
            'salon_categories_id'=>SalonCategory::where("name", "医療脱毛")->first()->id,
            'lat'=>35.69042915651579,
            'lng'=>139.70488226955774,
            'image'=>'https://mensbeautybucket.s3.ap-northeast-1.amazonaws.com/i_gorilla.jpg',
        ]);
        Salon::create([
            'name'=>'メンズクリア　新宿院',
            'body'=>'<p>新宿駅から徒歩1分の立地で気軽に通える環境です。<br>新宿駅と新宿三丁目駅からアクセスしやすいのが魅力です。<br>ショッピングや飲み会・デートの前にキレイになって周りの人を驚かせてみませんか?<br>東京の中心地にふさわしいプロフェッショナルたちが皆様のご来店をお待ちしております。</p>',
            'salon_categories_id'=>SalonCategory::where("name", "エステ")->first()->id,  
            'lat'=>35.69003741328179,
            'lng'=>139.7027983426444,
            'image'=>'https://mensbeautybucket.s3.ap-northeast-1.amazonaws.com/i_mensclear.jpg',
        ]);
        Salon::create([
            'name'=>'湘南美容外科 レーザー新宿大ガード院',
            'body'=>'サロン情報見本BODY3',
            'salon_categories_id'=>SalonCategory::where("name", "整形")->first()->id,     
            'lat'=>35.69527298208758,
            'lng'=>139.69811818522243,
            'image'=>'https://mensbeautybucket.s3.ap-northeast-1.amazonaws.com/i_sbc.jpg'
        ]);
    }
}
