<?php

use Illuminate\Database\Seeder;
use App\CosmeCategory;

class CosmeCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['SKIN','UV','BB','化粧水','乳液','美容液','下地','メンズメイク','パック','皮膚科処方薬','HAIR','香水'];
        foreach($categories as $category) {
            CosmeCategory::create([
            'name'=>$category,
            ]);
        }
    }
}
