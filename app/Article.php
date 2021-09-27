<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ArticleLike;

class Article extends Model
{
    protected $fillable =['title','body','user_id','article_categories_id','image_path'];
    
    public function articlecategory(){
        return $this->belongsTo('App\ArticleCategory','article_categories_id');
    }
    
    public function articlereviews(){
        return $this->hasMany('App\ArticleReview');
    } 
    
    public function articlelikes(){
        return count(ArticleLike::where("article_id", $this->id)->get());
    }
}
