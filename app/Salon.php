<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    public function saloncategory(){
        return $this->belongsTo('App\SalonCategory','salon_categories_id');
    }
}
