<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CosmeCategory extends Model
{
        public function cosmes(){
        return $this->hasMany('App\Cosme');
    }
}
