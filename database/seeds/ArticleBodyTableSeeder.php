<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticleBodyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'title'=>'sample',
            'body'=>'記事見本BODY',
            'user_id'=>1,
            'article_categories_id'=>1,            
            
        ]);
    }
}
