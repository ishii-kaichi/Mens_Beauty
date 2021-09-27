<?php

use Illuminate\Database\Seeder;
use App\ArticleCategory;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['美容','整形','エステ','化粧品','脱毛','スキンケア'];
        foreach($categories as $category) {
            ArticleCategory::create([
            'name'=>$category,
            ]);
        }
    }
}
