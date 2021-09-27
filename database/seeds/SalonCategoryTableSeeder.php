<?php

use Illuminate\Database\Seeder;
use App\SalonCategory;

class SalonCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['美容','整形','エステ','医療脱毛','AGA','スキンケア','ニキビ','ダイエット'];
        foreach($categories as $category) {
            SalonCategory::create([
            'name'=>$category,
            ]);
        }
    }
}
