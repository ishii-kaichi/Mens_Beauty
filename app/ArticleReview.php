<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleReview extends Model
{
    protected $fillable =['body','user_id','article_id'];
    
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
