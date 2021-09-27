<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\ArticleLike;

class ArticleLikeController extends Controller{
    public function like(Article $article){
        $article_id = $article->id;
        $user_id = auth()->user()->id;
        $like = ArticleLike::where("article_id", $article_id)->where("user_id", $user_id)->get();
        if(count($like)==0){
            ArticleLike::create([
            'article_id'=>$article_id,
            'user_id'=>$user_id,
            ]);
        }
        return back();
    }
    
    public function unlike(Article $article){
        $article_id = $article->id;
        $user_id = auth()->user()->id;
        $like = ArticleLike::where("article_id", $article_id)->where("user_id", $user_id)->get();
        if(count($like)==1){
            ArticleLike::where("article_id", $article_id)->where("user_id", $user_id)->delete();
        }
        return back();
    }
}
