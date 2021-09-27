<?php

use Illuminate\Database\Seeder;
use App\Cosme;
use App\CosmeCategory;

class CosmeBodyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cosme::create([
            'name'=>'<p>Maison Margiela REPLICA<br>Springtime in a Park</p>',
            'price'=>14500,
            'body'=>'REPRODUCTION OF FAMILIAR SCENTS AND MOMENTS OF VARYING LOCATIONS AND PERIODS.',
            'cosme_categories_id'=>CosmeCategory::where("name", "香水")->first()->id,            
            'image'=>'https://mensbeautybucket.s3.ap-northeast-1.amazonaws.com/replica.PNG',
        ]);
        Cosme::create([
            'name'=>'ハトムギ化粧水',
            'price'=>600,
            'body'=>'<p>毎日たっぷり水分補給<br>ナチュリエ ハトムギ化粧水<br>肌にうるおいを与えてスキンコンディションを整える<br>天然保湿成分ハトムギエキス配合の化粧水</p>',
            'cosme_categories_id'=>CosmeCategory::where("name", "SKIN")->first()->id,               
            'image'=>'https://mensbeautybucket.s3.ap-northeast-1.amazonaws.com/hatomugi.PNG',  
        ]);
        Cosme::create([
            'name'=>'モデニカ ナチュラル J',
            'price'=>1980,
            'body'=>'<p>まるでゼリー（Jelly）のようなみずみずしいジェルで<br>うるおいのある質感を表現。<br>ツヤ成分がウェットすぎずナチュラルなツヤを創ります。',
            'cosme_categories_id'=>CosmeCategory::where("name", "HAIR")->first()->id,         
            'image'=>'https://mensbeautybucket.s3.ap-northeast-1.amazonaws.com/modenica.PNG',  
        ]);
    }
}
