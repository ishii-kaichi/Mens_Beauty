<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cosme extends Model
{
    public function cosmecategory(){
        return $this->belongsTo('App\CosmeCategory','cosme_categories_id');
    }
}
