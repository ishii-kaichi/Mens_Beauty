<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalonCategory extends Model
{
        public function articles(){
        return $this->hasMany('App\Salon');
    }
}
